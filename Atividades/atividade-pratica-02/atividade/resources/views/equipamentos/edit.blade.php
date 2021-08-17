@extends('templates.template')

@section('content')

<h1>Editar</h1>

    <div>
    
        <form action="{{ route('equipamentos.update', $equipamento->id)}}" method="post">

            @csrf
            @method('PUT')

            <div>
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" value="{{$equipamento->name ?? ''}}">
                <input type="submit" value="Editar">
                <input type="reset" value="Limpar">
            </div>

        </form>
        <br>
        <a href="{{route('equipamentos.index')}}"><button>Voltar</button></a>
    </div>
@endsection