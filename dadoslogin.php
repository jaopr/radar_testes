<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação</title>
    <link rel="stylesheet" href="styles.css" type="text/css"/>
    <meta charset="utf-9"/>
</head>
<body>
    <?php

    require("conexaoDB.php");
				  

    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo $email . " " . $username . " " . $password;

?>
    ?>
</body>
</html>
