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

    <h1>Área Administrativa</h1>

    <div>
        <a href="{{route('equipamentos.create')}}">
            <button>Cadastrar</button>
        </a>
    </div>
    <div>
    @csrf
    <br>
        <table>
            
            <tr>
                <th>ID</th>
                <th>Equipamento</th>
                <th>Ações</th>
            </tr>
    
            @foreach($equipamento as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->name }} </td>
                    <td>
                        <a href="{{route('equipamentos.show', $e->id)}}">
                            <button>Visualizar</button>
                        </a>
                        <a href="{{route('equipamentos.edit', $e->id)}}">
                            <button>Editar</button>
                        </a>
                        <form name="frmDelete"
                            action="{{ route('equipamentos.destroy', $e->id)}}"
                            method="post"
                            onsubmit="return confirm('Confirma a exclusão do equipamento?');">

                            @csrf
                            @method('DELETE')

                            <input type="submit" value="Excluir">

                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <br>
        <a href="{{route('principal')}}"><button>Voltar</button></a>

    </div>


@endsection