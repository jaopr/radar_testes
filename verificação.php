<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está logado
if(isset($_SESSION['username'])) {
    // Se estiver logado, exibe uma mensagem de verificação
    echo "<h1>Login bem-sucedido!</h1>";
    echo "<p>Você está logado como: " . $_SESSION['username'] . "</p>";
    echo "<p><a href='logout.php'>Logout</a></p>";
} else {
    // Se não estiver logado, redireciona para a página de login
    header("Location: telalogin.php");
    exit;
}
?>
