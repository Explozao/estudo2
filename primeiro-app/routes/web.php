<?php

use App\Models\produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//rotas

Route::get('/','App\Http\Controllers\controladorhoracio@inicio');
Route::get('/eventos','App\Http\Controllers\controladorhoracio@evento');
Route::get('/criarEventos','App\Http\Controllers\controladorhoracio@criEvento');
Route::get('/cadastrar','App\Http\Controllers\controladorhoracio@cadastrar'); 

Route::post('/cadastrarproduto', function (Request $informacoes) {
    Produtos::create([
        'titulo'=> $informacoes->titulo_evento,
        'descricao'=> $informacoes->descricao_evento,
        'privado'=> $informacoes->privado_evento
    ]);
    return view('criareventos');

});

