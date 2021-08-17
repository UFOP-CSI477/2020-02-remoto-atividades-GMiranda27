@extends('templates.template')

@section('content')


<style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

<h1>Área Geral - Suporte</h1>
    
    @csrf
        <table>
            <tr>
                <th>ID</th>
                <th>Equipamento</th>
            </tr>
            
            @foreach($equipamento as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->name }} </td>
                </tr>
            @endforeach
        </table>
        <br>
        <a href="{{route('principal')}}"><button>Voltar</button></a>

</div>
@endsection