<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{

    public $timestamps = false;
    
    protected $table = 'titulos';
    protected $primaryKey = 'titulo_id';

    protected $fillable = [
        'titulo_valor_pago',
        'datapago',
        'titulo_recibo',
        'titulo_status',
        'formrecebimento',
        'notarecebimento',
        'titulo_tipo_baixa',
    ];

}
