<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "250904";
$database = "radar_testes";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Aqui você pode adicionar medidas adicionais de segurança, como hash para a senha

    // Prepara e executa a consulta SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Conta criada com sucesso!</h2>";
        echo "<p>Usuário: $username</p>";
        echo "<p>Email: $email</p>";
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
