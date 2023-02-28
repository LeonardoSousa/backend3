<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use App\Models\Fatura;
use App\Models\Clienteview;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ClientesController extends Controller
{

    public function index(Request $request)
    {

        $documento = $request->get("documento");
        $nome = $request->get("nome");

        return Clienteview::where('nome', '=', $nome)
            ->orWhere('documento', '=', $documento)->limit(10)->get();
    }

    public function show($id)
    {
        $cliente = Clienteview::find($id);
        $cliente->load('boletos');

        return $cliente;
    }

    public function store()
    {
        // return Cliente::create([
        //     "nome" => "Wargas Delmondes Teixeira",
        //     "documento" => "08948842471",
        //     "endereco" => "Rua do Ginásio, Socorro, 72",
        //     "cep" => "56180-000",
        //     "cidade" => "Santa Filomena",
        //     "uf" => "PE"
        // ]);
    }

    public function fatura()
    {
        // $nosso_numero = 1001;

        // $boletoId =  Boleto::where('nosso_numero', $nosso_numero)->first()->fatura_id;
        
        // $faturaDb = Fatura::where('titulo_id', $boletoId)->get();

        return ['BITMAX' => 'Faturas'];
    }
}
