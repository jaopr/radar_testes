<?php
// Conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = ""; // Senha em branco
$banco = "radar"; // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Verifica se os campos de usuário e senha foram enviados
if(isset($_POST['email']) && isset($_POST['password'])) {
    // Recebe os dados do formulário
    $email = $_POST['email']; // Alterado de username para email
    $password = $_POST['password'];
    // Restante do código...


        // Prepara e executa a consulta SQL para verificar se o email e a senha estão corretos
        $sql = "SELECT * FROM usuario WHERE email='$email' AND senha='$password'";
        $result = $conn->query($sql);

        // Verifica se a consulta retornou algum resultado
        if ($result && $result->num_rows > 0) {
            // Login bem-sucedido, redireciona para a página principal
            header("Location: principal.php");
            exit;
        } else {
            // Senha incorreta ou email não encontrado, redireciona de volta para a página de login com mensagem de erro
            header("Location: telalogin.php?error=Email ou senha incorretos");
            exit;
        }
    } else {
        // Campos de email e/ou senha não foram enviados, redireciona de volta para a página de login com mensagem de erro
        header("Location: telalogin.php?error=Por favor, preencha todos os campos");
        exit;
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
