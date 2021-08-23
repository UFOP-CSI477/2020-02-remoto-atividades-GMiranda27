<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
    
    <title>Gestor de estudos</title>
</head>

<style>
    * {
        margin: 0 auto;
        padding: 0;
    }

    
    .max-width {
        max-width: 500px;
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        margin-top: 10%;
        text-align: center;
    }

    h1 {
        font-family: 'Courier New', Courier, monospace;
        margin-top: 20px;
    }

    button {
        padding: 10px;
        border: none;
        outline: none;
        font-family: 'Segoe UI';
        font-size: 1.1em;
        transition: all .5s;
        cursor: pointer;
        border-radius: 25px;
    }

    button:hover {
        background-color: #a1c0d1;
    }

    button:active {
        background-color: #111;
    }

    .bg-green {
        background-color: #b2d1a1;
    }

    .bg-yellow {
        background-color: #d1cba1;
    }

    .bg-red {
        background-color: #d1a1a1;
    }
</style>

<body>
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
                <li class="nav-item active">
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
                <a class="navbar-brand" href="#pablo">Cronômetro</a>
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
    <div class="max-width">
        <button onclick="start();" class="bg-green">Iniciar</button>
        <button onclick="pause();" class="bg-yellow">Pausar</button>
        <button onclick="stop();" class="bg-red">Parar</button>
        <h1 id="counter">00:00:00</h1>
    </div>

<script src="resources/js/cron.js" ></script>

</body>


<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('assets/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}"></script>

</html>