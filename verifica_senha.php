<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o nome de usuário/email e senha estão corretos (substitua esta lógica pela sua)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Aqui você deve implementar a lógica para verificar se a senha está correta para o usuário especificado
    // Por exemplo, você pode consultar o banco de dados para obter a senha correspondente ao usuário e compará-la com a senha fornecida pelo usuário

    // Vamos simular uma verificação simples aqui
    $senha_correta = "senha123";
    if ($password == $senha_correta) {
        // Se a senha estiver correta, redireciona para a página principal
        header("Location: principal.php");
        exit;
    } else {
        // Senha incorreta, emite uma mensagem de erro e redireciona de volta para a página de login
        echo "<script>alert('Senha incorreta');</script>";
        header("Location: telalogin.php");
        exit;
    }
}
?>
