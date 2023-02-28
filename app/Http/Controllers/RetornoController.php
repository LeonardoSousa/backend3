<?php

namespace App\Http\Controllers;

use App\Actions\ProcessaRetornoAction;
use App\Jobs\JobProcessaRetorno;
use App\Libraries\Retorno\Retorno;
use App\Models\Retorno as ModelsRetorno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class RetornoController extends Controller
{

    public function index()
    {   
        $retornos = ModelsRetorno::orderBy('id', 'DESC')->get();
        return $retornos;
    }

    function upload(Request $request)
    {
        $nome = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('retornos');
        
        $retorno = ModelsRetorno::query()->create([
            'path' => $path,
            'data_envio' => now(),
            'nome' => $nome,
            'status' => 'PENDENTE',
            'progress' => 0
        ]);

        return $retorno;
    }

    function processar(Request $request, ModelsRetorno $retorno) {
        JobProcessaRetorno::dispatch($retorno);
        return $retorno;
    }
}
