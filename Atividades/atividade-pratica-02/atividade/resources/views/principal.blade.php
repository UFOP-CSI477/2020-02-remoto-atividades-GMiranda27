@extends('templates.template')

@section('content')

<h1>Sistema de Manutenção de Equipamentos</h1>
    <div>
        <a href="{{route('equipamentos.index')}}">
            <button>Área Administrativa</button>
        </a>
        <a href="{{route('suporte.index')}}">
            <button>Área Geral - Suporte</button>
        </a>
    </div>

@endsection