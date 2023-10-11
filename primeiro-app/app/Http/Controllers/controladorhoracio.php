<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produtos;

class controladorhoracio extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function evento()
    {
        $produtos= Produtos::all();

        return view('eventos',['produtos'=> $produtos]);
    }

    public function criEvento()
    {
        return view('criareventos');
    }

    public function cadastrar()
    {
        return view('cadastrar'); 
    }
}
