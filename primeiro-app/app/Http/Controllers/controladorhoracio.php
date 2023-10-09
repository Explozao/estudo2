<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorhoracio extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function evento()
    {
        return view('eventos');
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
