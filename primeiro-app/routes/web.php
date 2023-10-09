<?php

use Illuminate\Support\Facades\Route;

//rotas

Route::get('/','App\Http\Controllers\controladorhoracio@inicio');
Route::get('/eventos','App\Http\Controllers\controladorhoracio@evento');
Route::get('/criarEventos','App\Http\Controllers\controladorhoracio@criEvento');
Route::get('/cadastrar','App\Http\Controllers\controladorhoracio@cadastrar');