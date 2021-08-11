<?php

    require 'connection.php';

    $nome = $_POST['nome'];
    $unidade = $_POST['um'];

    if(empty($nome) || empty($unidade)) {
        echo '<div><a href="insert.php">Voltar</a></div>';
        die('Informe os dados corretamente');
    }

    try {

        $connection->beginTransaction();

        $stmt = $connection->prepare("INSERT INTO produtos (nome, um) VALUES (:nome, :um)");

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':um', $unidade);

        $stmt->execute();

        $connection->commit();

        header('Location: index.php');
        exit();
    } catch(Exception $e) {
        $connection->rollBack();
        die("Erro ao inserir o produto: " . $e->getMessage());
    }