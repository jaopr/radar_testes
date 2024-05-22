<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("conexaoDB.php");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$username', '$email', '$password')";

    if ($conexao->query($sql) === TRUE) {
      header("Location: telalogin.php");
      exit;
    } else {
      echo "Erro ao cadastrar usuário: " . $conexao->error;
    }

    $conexao->close();
  }
?>
