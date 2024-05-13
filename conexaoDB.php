<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";

// Nome do banco de dados
$banco = "radar";

// Criando a conexão
$conexao = new mysqli($servidor, $usuario, $senha);

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

//$conexao->close();
?>