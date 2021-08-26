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
              <h6 class="h2 text-white d-inline-block mb-0"></br>Visualizar registros</h6>
            </div>
          </div>
            
          </div>
        </div>
      </div>
    <!-- Page content -->
    <div class="content">
      <div class="row">
        <div class="card-body">
        @csrf
                  <table class="table">

                    <thead class="text-dark">
                      <th class="text-center">ID</th>
                      <th class="text-center">Pessoa</th>
                      <th class="text-center">Unidade</th>
                      <th class="text-center">Vacina</th>
                      <th class="text-center">Dose</th>
                      <th class="text-center">Data</th>
                      <th class="text-center"></th>
                    </thead>

                    <tbody>
                    
                    @foreach($registro as $r)
                        <tr>
                          <td class="text-center">{{ $r->id }}</td>
                          <td class="text-center">{{ $r->pessoa->nome }}</td>
                          <td class="text-center">{{ $r->unidade->nome }}</td>
                          <td class="text-center">{{ $r->vacina->nome }}</td>
                          <td class="text-center">{{ $r->dose }}</td>
                          <td class="text-center">{{ $r->data }}</td>
                          <td class="text-center">
                            <a href="{{route('registros.edit', $r->id)}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                              <form name="frmDelete" action="{{ route('registros.destroy', $r->id)}}" method="post" onsubmit="return confirm('Confirma exclusão?');">        
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Deletar</button>     
                              </form> 
                          </td>
                        </tr>
                    @endforeach
                    
                    </tbody>

                  </table>

                <div class="content">
                    <div class="text-center">
                        <a href="{{route('registros.create')}}">
                            <button class="btn btn-success">Inserir</button>
                        </a>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection