<?php
session_start();

if(isset($_SESSION['username'])) {
    echo "<h1>Login bem-sucedido!</h1>";
    echo "<p>Você está logado como: " . $_SESSION['username'] . "</p>";
    echo "<p><a href='logout.php'>Logout</a></p>";
} else {
    header("Location: telalogin.php");
    exit;
}
?>
