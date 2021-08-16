<?php

    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    

    //echo "POST";
    //var_dump($_POST);


    // Controller para testes
    if ( $user == "admin" && $password == "123456" ) {
        return view('principal');
    } else {
        echo "<h1>Usuário e/ou senha inválidos!</h1>";
    }

    //echo "<a href=\"/login/index.php\">Voltar</a>";
    echo '<a href="resources/views/principal.blade.php">Voltar</a>';
    

    