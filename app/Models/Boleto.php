<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{
    protected $fillable = [
        'cliente_id',
        'vencimento',
        'seu_numero',
        'nosso_numero',
        'valor',
        'status',
        'txid',
        'url_pix',
    ];

    public function cliente() {
        return $this->belongsTo(Clienteview::class, 'contrato_id');
    }
}
