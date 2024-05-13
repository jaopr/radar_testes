<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "250904";
$database = "radar_testes";

// Cria a conexão
$conn = new mysqli($servername, $username, $password);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Seleciona o banco de dados
$conn->select_db($database);

// Verifica se ocorreu algum erro ao selecionar o banco de dados
if ($conn->errno) {
    die("Erro ao selecionar o banco de dados: " . $conn->error);
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepara e executa a consulta SQL para verificar se o usuário e a senha estão corretos
    $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Verifica se a consulta retornou algum resultado
    if ($result->num_rows > 0) {
        // Login bem-sucedido, redireciona para a página principal
        header("Location: principal.php");
        exit;
    } else {
        // Senha incorreta, emite uma mensagem de erro e redireciona de volta para a página de login
        echo "<script>alert('Nome de usuário ou senha incorretos');</script>";
        header("Location: telalogin.php");
        exit;
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
