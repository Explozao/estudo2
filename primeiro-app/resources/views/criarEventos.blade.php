@extends('leyouts.main')

@section('title','criareventos')

@section('content')

    <form action="/cadastrarproduto" method="post" class="formulariocri">
        @csrf
        <div class="formulariodiv">

            <label for="titulo">TITOLO/TEMA</label>
            <input type="text" id="titulo" required name="titulo_evento">

            <label for="privado">PRIVADO SIM/NÃO</label>
            <input type="text" id="privado" required name="privado_evento">

            <label for="descricao">DESCRIÃO DO EVENTO</label>
            <textarea type="text-area" id="descricao" col="30" rows="30" required name="descricao_evento"></textarea>

            <button type="submit" class="botao">cadastrar</button>
            <button type="reset" class="botao">limpar</button>
        </div>
    </form>



@endsection
