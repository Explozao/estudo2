@extends('leyouts.main')

@section('title','criareventos')

@section('content')

    <form action="" method="get" class="formulariocri">
        <div class="formulariodiv">

            <label for="titulo">TITOLO/TEMA</label>
            <input type="text" id="titulo" required>

            <label for="privado">PRIVADO SIM/NÃO</label>
            <input type="text" id="privado" required>

            <label for="descricao">DESCRIÃO DO EVENTO</label>
            <textarea type="text-area" id="descricao" col="30" rows="30" required></textarea>

            <button type="submit" class="botao">cadastrar</button>
            <button type="reset" class="botao">limpar</button>
        </div>
    </form>



@endsection
