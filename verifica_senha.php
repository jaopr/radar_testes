<?php
$servidor = "localhost";
$usuario = "root";
$senha = ""; 
$banco = "radar";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

        $sql = "SELECT * FROM usuario WHERE email='$email' AND senha='$password'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            header("Location: principal.php");
            exit;
        } else {
            header("Location: telalogin.php?error=Email ou senha incorretos");
            exit;
        }
    } else {
        header("Location: telalogin.php?error=Por favor, preencha todos os campos");
        exit;
    }
}

$conn->close();
?>
