@extends('templates.template')

@section('content')

    <h1>Cadastrar</h1>

    <div>

        <form name="cadastro" id="cadastro" method="post" action="{{url('equipamentos')}}">
            @csrf
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="name" id="name" required>
                
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </div>
        </form>
        
        <br>
        <a href="{{route('equipamentos.index')}}"><button>Voltar</button></a>
    </div>

@endsection