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
                <p class="welcome-message">Bem-vindo de volta, por favor, logue e continue.</p>
                <form action="verifica_senha.php" method="post">
                    <input type="email" name="email" placeholder="Email" required class="input-field">
                    <input type="password" name="password" placeholder="Senha" required class="input-field">
                    <button type="submit" class="submit-button">Continue</button>
                </form>
                <p>Não possui Conta? <a href="cadastro.php" class="signup-link">Cadastre-se</a></p>
                <?php
                if(isset($_GET['error'])) {
                    echo "<p class='error-message'>" . $_GET['error'] . "</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
