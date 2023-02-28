<?php

namespace App\Actions;

use App\Libraries\Retorno\Retorno;
use App\Models\Boleto;
use App\Models\Fatura;
use App\Models\Retorno as RetornoModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProcessaRetornoAction
{

    public function __construct(public RetornoModel $retornoDB)
    {
    }

    public function handle()
    {
        DB::transaction(function () {
            $content = Storage::get($this->retornoDB->path);
            $retorno = new Retorno($content);

            $SegmentosT = $retorno->getSegmentosT();
            $SegmentosU = $retorno->getSegmentosU();
            $SegmentosY = $retorno->getSegmentosY();
           
            $sequencial = Str::of($retorno->getHeaderArquivo()->numeroSequencialDoArquivo)
                ->ltrim('0');

            $this->retornoDB->update(['status' => 'PROCESSANDO', 'sequencial' => $sequencial]);

            foreach ($SegmentosT as $index => $t) {
                $U = $SegmentosU[$index];
                               
                $nosso_numero = Str::of($t->identificacaoDoBoletoNoBanco)
                    ->ltrim("0")
                    ->substr(0, -1);

                $boletoDb = Boleto::query()->firstWhere('nosso_numero', $nosso_numero);
                $faturaDb = Fatura::query()->firstWhere('titulo_id', $boletoDb->fatura_id);

                if ($t->codigoDeMovimento == '02') {
                    $boletoDb->status = 'REGISTRADO';
                }

                if ($t->codigoDeMovimento == '09' || $t->codigoDeMovimento == '06') {
                    $formaRecebimento = match ($t->codigoDeMovimento) {
                        '09' => 'SantanderPJ-PIX',
                        '06' => 'SantanderPJBoleto'
                    };

                    $boletoDb->fill([
                        'valor_pago' => Retorno::moneyToMysql($U->valorPagoPeloPagador),
                        'data_pago' => Retorno::dateToMysql($U->dataDaOcorrencia),
                        'data_credito' =>  Retorno::dateToMysql($U->dataDaEfetivacaoDoCredito),
                        'status' => 'PAGO',
                    ]);

                    $faturaDb->fill([
                        'titulo_valor_pago' => Retorno::moneyToMysql($U->valorPagoPeloPagador),
                        'datapago' => Retorno::dateToMysql($U->dataDaOcorrencia),
                        'titulo_status' => 'PAGO',
                        'formrecebimento' =>  $formaRecebimento,
                        'titulo_tipo_baixa' => 'Retorno',
                    ]);
                }

                $boletoDb?->save();
                $faturaDb?->save();
                
            }

            foreach ($SegmentosY as $y) {
                if ($y->codigoDeMovimento == '02') {
                    Boleto::query()
                        ->firstWhere('txid', $y->txId)
                        ->update([
                            'url_pix' => $y->chavePixUrlQrCode
                        ]);
                }
            }
            $this->retornoDB->update(['status' => 'CONCLUIDO', 'progress' => 1]);
        });
    }

    public static function run(RetornoModel $retorno)
    {
        return (new self($retorno))->handle();
    }
}
