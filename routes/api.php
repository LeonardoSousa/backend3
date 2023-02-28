<?php

use App\Services\PusherService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () use ($router) {
    Route::get('clientes', 'ClientesController@index');
    Route::get('clientes/{id}', 'ClientesController@show');
    Route::post('clientes', 'ClientesController@store');
    Route::get('boletos', 'BoletosController@index');
    // Route::get('/boletos/print/{id}', 'BoletosController@print');
    // Route::get('/boletos/print/{id}', 'BoletosController@print');
    Route::post('boletos', 'BoletosController@store');
    Route::get('me', 'AuthController@currentUser');
    Route::get('remessas', 'RemessaController@index');
    Route::get('remessas/download/{id}', 'RemessaController@download');
    Route::post('remessas/retorno', 'RemessaController@retorno');
    Route::post('remessas', 'RemessaController@store');
    //Retorno
    Route::get('retornos', 'RetornoController@index');
    Route::post('retornos/upload', 'RetornoController@upload');
    Route::post('retornos/{retorno}/reprocessar', 'RetornoController@processar');
});

Route::prefix('v1')->group(function(){    
    Route::get('auth', 'AuthController@index');
    Route::post('auth', 'AuthController@login');
    Route::get('fatura', 'ClientesController@fatura');
    Route::get('carne', 'BoletosController@carne');
    Route::get('boletos/print/{id}', 'BoletosController@print');
    Route::get('boletos/imprimir/{id}', 'BoletosController@imprimir');
});