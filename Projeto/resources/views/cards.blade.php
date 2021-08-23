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
                <li>
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
                <li class="nav-item active">
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
                <a class="navbar-brand" href="#pablo">Flash Cards</a>
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
                
                <div class="content">
                    <div class="text-center">
                        <a href="{{route('cards.create')}}">
                            <button class="btn btn-success">Inserir</button>
                        </a>
                    </div>
                </div>
                </br>
                <div class="card text-center w-25">
                    <div class="card text-white bg-dark mb-0">
                    @csrf
                        @foreach($cards as $c)
                            <h5 class="card-title text-white" style="font-size: 30px;"></br></br>{{ $c->name }}</h5>
                            <p class="card-text">
                                    
                                <a href="{{route('cards.show', $c->id)}}"></br></br>
                                    <button class="btn btn-primary">Visualizar</button>
                                </a>
                                <form name="frmDelete" action="{{ route('cards.destroy', $c->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão da atividade?');">
                                            
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger">Deletar</button>
                                            
                                </form>
                            </p>
                        @endforeach
                    </div>
                </div>
                {{$cards->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
@endsection