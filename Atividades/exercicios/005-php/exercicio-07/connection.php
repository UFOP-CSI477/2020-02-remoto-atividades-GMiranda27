<?php

    // Configuração:
    $dbfile = "./db/produtos.sqlite";
    $dbuser = "";
    $dbpassword = "";
    $dbhost = "";

    $strConnection = "sqlite:" . $dbfile;

    $connection = new PDO($strConnection, $dbuser, $dbpassword);

    //var_dump($connection);