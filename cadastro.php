<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
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
                <p>Preencha os campos abaixo para criar sua conta.</p>
                <form action="cadastro_processamento.php" method="post">
                    <input type="text" name="username" placeholder="Usuário" required>
                    <input type="email" name="email" placeholder="Endereço de Email" required>
                    <input type="password" name="password" placeholder="Senha" required>
                    <button type="submit">Cadastrar</button>
                </form>
                <p>Já possui uma conta? <a href="telalogin.php">Faça login</a></p>
            </div>
        </div>
    </div>
</body>
</html>
