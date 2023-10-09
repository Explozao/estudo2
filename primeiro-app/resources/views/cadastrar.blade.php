@extends('leyouts.main')

@section('title','inicio')

@section('content')


<form action="" method="get" class="formulariocri">
        <div class="formulariodiv">

            <label for="nome">NOME</label>
            <input type="text" id="nome" required>

            <label for="datadenascimento">DATA DE NASCIMENTO</label>
            <input type="date" id="datadenascimento" required>

            <label for="email">EMAIL</label>
            <input type="email" id="email" required>

            <label for="empreza">EMPREZA/GRUPO/MARCA</label>
            <input type="text" id="empreza" required>

            <label for="privado">FUNÇÃO</label>
            <input type="text" id="privado" required>

            <button type="submit" class="botao">cadastrar</button>
            <button type="reset" class="botao">limpar</button>
        </div>
    </form>


@endsection
