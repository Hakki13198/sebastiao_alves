<?php

require_once("importacoes_backend.php");

$esta_logado = false;

$form = isset($_POST["username"]) && isset($_POST["password"]);

if($form){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $esta_logado = logar($username, $password);

    if($esta_logado){

        header("Location: home.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice - Sebastião</title>
    <link rel="stylesheet" href="imports/imports.css">
    <link rel="stylesheet" href="backoffice-style.css">    
</head>
<body>

<header>
    <h1>BACKOFFICE - SEBASTIÃO</h1>
    <br>
</header>

<main>
    <div class="login-css">
        <form class="backoffice-login-form" action="" method="post">
                
            <label for="username">Username:</label>
            <input class="login-css-input" type="text" name="username" required="required" autofocus>
            <label for="password">Password:</label>
            <input class="login-css-input" type="password" name="password" required="required">
          
            <?php if($form): ?>
                <br>
                <?php if(!$esta_logado): ?>
                    <h3 class="login-invalido">Login inválido, tente novamente.</h3>
                <?php endif; ?>
            <?php endif; ?>
            <br>
            <input class="login-submit-css" type="submit" value="Login">
        </form>
    </div>
</main>

<?php require("components/footer.php"); ?>