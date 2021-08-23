@extends('templates.template')
@section('content')

<div class="wrapper">
    <div class="sidebar" data-image="{{ asset('assets/img/sidebar-5.jpg') }}">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="javascript:;" class="simple-text">
                Gestor de estudos
                </a>
            </div>
            <ul class="nav">
                <li>
                    <a class="nav-link" href="{{url('calendario')}}">
                        <i class="nc-icon nc-icon nc-grid-45"></i>
                        <p>Calendário</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('controle')}}">
                        <i class="nc-icon nc-notes"></i>
                        <p>Controle</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{url('cronometro')}}">
                        <i class="nc-icon nc-time-alarm"></i>
                        <p>Cronômetro</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{url('cards')}}">
                        <i class="nc-icon nc-single-copy-04"></i>
                        <p>Flash Cards</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="main-panel">
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand" href="#pablo">Controle</a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nc-icon nc-zoom-split"></i>
                                <span class="d-lg-block">&nbsp;Pesquisar</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <span class="no-icon">Conta</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <span class="no-icon">Sair</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- End Navbar -->
    <div class="content">
        
        <div class="container-fluid">
            <div class="section">
                <div class="card-body">
                  @csrf
                    <table class="table">

                        <thead class=" text-primary">
                            <th class="text-center">Data</th>
                            <th class="text-center">Atividade</th>
                            <th class="text-center">Descrição</th>
                            <th class="text-center"></th>
                        </thead>

                        <tbody>
                        @foreach($controle as $c)
                            <tr>
                                <td>{{ $c->data }}</td>
                                <td>{{ $c->atividade }}</td>
                                <td>{{ $c->descricao }}</td>
                                <td class="text-center">
                                    <a href="{{route('controle.edit', $c->id)}}">
                                        <button class="btn btn-primary">Editar</button>
                                    </a>
                                    <form name="frmDelete" action="{{ route('controle.destroy', $c->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão da atividade?');">
                                        
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger">Deletar</button>
                                        
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

                <div class="content">
                    <div class="text-center">
                        <a href="{{route('controle.create')}}">
                            <button class="btn btn-success">Inserir</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection