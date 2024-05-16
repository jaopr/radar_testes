<?php
  // Verifica se o formulário foi submetido
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Chamando a conexão com banco de dados
    require("conexaoDB.php");

    // Recebe os dados do formulário
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepara a consulta de inserção
    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$username', '$email', '$password')";

    // Executa a consulta de inserção
    if ($conexao->query($sql) === TRUE) {
      // Redireciona o usuário de volta para a tela de login após o cadastro
      header("Location: telalogin.php");
      exit;
    } else {
      // Se houver erro na execução da consulta, exibe uma mensagem de erro
      echo "Erro ao cadastrar usuário: " . $conexao->error;
    }

    // Fechando a conexão após o uso
    $conexao->close();
  }
?>
