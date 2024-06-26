<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="styles.css"> <!-- Se houver um arquivo de estilo -->
</head>
<body>
    <div class="container">
        <?php
        session_start();

        if(isset($_SESSION['nome'])) {
            $username = $_SESSION['nome'];
            echo "<h1>Você está logado, <span class='username'>$username</span>!</h1>";
        } else {
            echo "<h1>Você está logado!</h1>";
        }
        ?>
        <p class="welcome-message">Bem-vindo ao Radar</p>
        <form action="telalogin.php" method="post">
            <button type="submit" class="logoff-button">Logoff</button>
        </form>
    </div>
</body>
</html>
