@extends('leyouts.main')

@section('title','inicio')

@section('content')

    <div class="categoria">  
        <p>id</p>  
        <p>Temas</p>
        <p>Privado</p>
    </div>
@foreach($produtos as $produto)

    <div class="bancodiv">
        <p>{{$produto->id}}</p>
        <p>{{$produto->titulo}}</p>
        <p>{{$produto->privado}}</p>
    </div>

@endforeach


@endsection