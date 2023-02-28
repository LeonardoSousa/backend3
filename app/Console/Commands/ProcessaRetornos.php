<?php

namespace App\Console\Commands;

use App\Libraries\Retorno\Retorno;
use App\Models\RetornoItem;
use Illuminate\Console\Command;
use Storage;
use Str;

class ProcessaRetornos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'processa';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $files = collect(Storage::files('retornos'));

        $files->filter(fn($f) => Str::of($f)->endsWith('.txt'))->each(function($file) {
            $content = Storage::get($file);
            $retorno = new Retorno($content);

            $segmentsT = $retorno->getSegmentosT();

            foreach($segmentsT as $t) {

                $nosso_numero = Str::of($t->identificacaoDoBoletoNoBanco)
                    ->ltrim("0")
                    ->substr(0, -1);
                $movimento = $t->codigoDeMovimento;

                RetornoItem::query()->upsert([
                    'id' => "{$nosso_numero}:{$movimento}",
                    'nosso_numero' => $nosso_numero,
                    'codigo_movimento' => $movimento,
                    'retorno_sequencial' => $retorno->getHeaderArquivo()->numeroSequencialDoArquivo
                ], 'id');
                print("{$nosso_numero}:{$movimento}".PHP_EOL);
            }
        });
    }
}
