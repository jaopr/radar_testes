<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "radar";

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die("Conexão Falhou: " . $conexao->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $banco";
    if ($conexao->query($sql) === TRUE) {
        echo "Banco de dados criado com sucesso! ";
    } else {
        echo "Erro ao criar Banco de dados: " . $conexao->error;
    }

?>
