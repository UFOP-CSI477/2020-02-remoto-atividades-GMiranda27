@extends('templates.template')
@section('content')

<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="{{url('/')}}">
          Sistema
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('')}}">
                <i class="text-primary"></i>
                <span class="nav-link-text">Página inicial</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('areageral')}}">
                <i class="text-orange"></i>
                <span class="nav-link-text">Área Geral</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('areaadministrativa')}}">
                <i class="text-primary"></i>
                <span class="nav-link-text">Área Administrativa</span>
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
    <div class="header bg-dark pb-4">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-2">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"></br>Editar registro</h6>
            </div>
          </div>
            
          </div>
        </div>
      </div>
    <!-- Page content -->
    <div class="content">
      <div class="row">
        <div class="card-body">
        <form name="formCad" id="formCad" method="post" action="{{route('registros.update', $registro->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                    <label for="pessoa_id">Pessoa</label>
                    <select class="form-control" name="pessoa_id" id="pessoa_id"><option value="">Selecione</option>
                    @foreach($pessoa as $p)
                        <option value="{{$p->id}}">{{$p->nome}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label for="unidade_id">Unidade</label>
                    <select class="form-control" name="unidade_id" id="unidade_id"><option value="">Selecione</option>
                    @foreach($unidade as $u)
                        <option value="{{$u->id}}">{{$u->nome}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label for="vacina_id">Pessoa</label>
                    <select class="form-control" name="vacina_id" id="vacina_id"><option value="">Selecione</option>
                    @foreach($vacina as $v)
                        <option value="{{$v->id}}">{{$v->nome}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="dose">Dose</label>
                    <input type="number" class="form-control" name="dose" id="dose">
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="date" class="form-control" name="data" id="data">
                </div>
                <div class="text-right">
                    <input type="submit" value="Editar" class="btn btn-primary mt-3 mb-4">
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  
@endsection