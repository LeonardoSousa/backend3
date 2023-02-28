<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Boleto
 *
 * @property int $id
 * @property int $fatura_id
 * @property int $contrato_id
 * @property string $emissao
 * @property string $valor
 * @property string $vencimento
 * @property int $numero_documento
 * @property int $nosso_numero
 * @property string|null $data_pago
 * @property string|null $valor_pago
 * @property string|null $data_credito
 * @property string $competencia
 * @property string $status
 * @property string $txid
 * @property string|null $url_pix
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $remessa_id
 * @property-read \App\Models\Clienteview|null $cliente
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto query()
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereCompetencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereContratoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereDataCredito($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereDataPago($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereEmissao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereFaturaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereNossoNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereNumeroDocumento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereRemessaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereTxid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereUrlPix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereValor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereValorPago($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Boleto whereVencimento($value)
 */
	class Boleto extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cliente
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Boleto> $boletos
 * @property-read int|null $boletos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cliente query()
 */
	class Cliente extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Clienteview
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Boleto> $boletos
 * @property-read int|null $boletos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Clienteview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Clienteview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Clienteview query()
 */
	class Clienteview extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fatura
 *
 * @property int $titulo_id
 * @property int|null $titulo_cliente
 * @property string|null $emissao
 * @property string|null $start
 * @property string|null $stop
 * @property string|null $vencimento
 * @property string|null $titulo_referencia
 * @property string|null $titulo_valor
 * @property int|null $nfeid
 * @property int $titulo_nfe
 * @property string|null $titulo_nosso_numero
 * @property string|null $acrescimo
 * @property string|null $desconto
 * @property string|null $titulo_valor_pago
 * @property string|null $datapago
 * @property int|null $titulo_coletor
 * @property string|null $titulo_recibo
 * @property string|null $titulo_descricao
 * @property string|null $titulo_status
 * @property string|null $titulo_tipo
 * @property int|null $titulo_venda
 * @property string|null $titulo_tipo_baixa
 * @property string|null $titulo_tarifa
 * @property string|null $dataretorno
 * @property string|null $titulo_nota
 * @property string|null $inf_pag data informada o pagamento do titulo
 * @property string|null $usuariogerou
 * @property int|null $editado
 * @property string|null $notadesconto
 * @property string|null $notaacrescimo
 * @property string|null $dataimpresso
 * @property string|null $formrecebimento
 * @property string|null $notarecebimento
 * @property int|null $titulo_fechado
 * @property string $multa
 * @property string $juros
 * @property string|null $leonardo
 * @property string|null $asaas_payment_id
 * @property string|null $codigo_barras
 * @property string|null $numero_documento
 * @property int|null $notafiscal_id
 * @property int|null $competencia
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereAcrescimo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereAsaasPaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereCodigoBarras($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereCompetencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereDataimpresso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereDatapago($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereDataretorno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereDesconto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereEditado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereEmissao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereFormrecebimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereInfPag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereJuros($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereLeonardo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereMulta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereNfeid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereNotaacrescimo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereNotadesconto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereNotafiscalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereNotarecebimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereNumeroDocumento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereStop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloCliente($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloColetor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloFechado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloNfe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloNossoNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloNota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloRecibo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloReferencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloTarifa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloTipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloTipoBaixa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloValor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloValorPago($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereTituloVenda($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereUsuariogerou($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fatura whereVencimento($value)
 */
	class Fatura extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Remessa
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Remessa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remessa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remessa query()
 */
	class Remessa extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Retorno
 *
 * @property int $id
 * @property int|null $sequencial
 * @property string $data_envio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $nome
 * @property string|null $status
 * @property string|null $progress
 * @property string|null $path
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno query()
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno whereDataEnvio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno whereProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno whereSequencial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Retorno whereUpdatedAt($value)
 */
	class Retorno extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RetornoItem
 *
 * @property string $id
 * @property int|null $nosso_numero
 * @property string|null $codigo_movimento
 * @property string|null $retorno_sequencial
 * @method static \Illuminate\Database\Eloquent\Builder|RetornoItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RetornoItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RetornoItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|RetornoItem whereCodigoMovimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RetornoItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RetornoItem whereNossoNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RetornoItem whereRetornoSequencial($value)
 */
	class RetornoItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $login
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

