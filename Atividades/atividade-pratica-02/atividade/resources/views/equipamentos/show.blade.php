@extends('templates.template')

@section('content')

    <h1>Visualizar</h1>

    <div>
        <p>Id: {{ $equipamento->id }}</p>
        <p>Nome: {{ $equipamento->name }}</p>
    </div>
    
    <br>
    <a href="{{route('equipamentos.index')}}"><button>Voltar</button></a>
@endsection