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
                        <p>Cronometro</p>
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
                <form name="formCad" id="formCad" method="post" action="{{url('controle')}}">
                        @csrf
                        <div class="form-group">
                            <label for="atividade">Atividade</label>
                            <input type="text" class="form-control" name="atividade" id="atividade" required>
                            
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" name="descricao" id="descricao" required>

                            <label for="data">Data</label>
                            <input type="date" class="form-control" name="data" id="data" required>

                            <div class="text-center">
                              <input type="submit" value="Inserir" class="btn btn-primary mt-3 mb-4">
                              <input type="reset" value="Limpar" class="btn btn-danger mt-3 mb-4">
                            </div>
                            
                        </div>
                    </form>
            </div>
        </div>
        
    </div>
</div>
@endsection