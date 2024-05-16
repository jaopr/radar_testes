<?php
    // Configurações de conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "radar";

    // Criando a conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // Verificando a conexão
    if ($conexao->connect_error) {
        die("Conexão Falhou: " . $conexao->connect_error);
    }

    // Criando o Banco de Dados
    $sql = "CREATE DATABASE IF NOT EXISTS $banco";
    if ($conexao->query($sql) === TRUE) {
        echo "Banco de dados criado com sucesso! ";
    } else {
        echo "Erro ao criar Banco de dados: " . $conexao->error;
    }

    // Não fechamos a conexão aqui
?>
