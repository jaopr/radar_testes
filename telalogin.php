<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="left-half">
            <img src="imgs/logo_mg.png" alt="Logo do Projeto" class="logo">
        </div>

        <div class="right-half">
            <div class="login-box">
                <img src="imgs/logo_radar.png" alt="Logo Radar" class="logo-radar">
                <?php
                // Verifica se houve um erro ao tentar realizar o login
                if(isset($_GET['error'])) {
                    $error = $_GET['error'];
                    echo "<p class='error-message'>$error</p>";
                }
                ?>
                <p>Bem-vindo de volta, por favor, logue e continue.</p>
                <form action="verifica_senha.php" method="post">
                    <input type="text" name="username" placeholder="Email ou Nome de Usuário" required>
                    <button type="submit">Continue</button>
                </form>
                <p>Não possui Conta? <a href="cadastro.php">Cadastre-se</a></p>
            </div>
        </div>
    </div>
</body>
</html>
