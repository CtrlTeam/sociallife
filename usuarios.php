<?php
    if(!isset($_COOKIE['autenticacao'])){
        header('Location:'.'index.php?erro=3');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="menu" class="flex horizontal center">
        <?php include ("resources/header.php") ?>
    </div>
<!-- Não sei como pesquisar cada usuario então o google é só um exemplo -->

    <div class="container">
        <form action="https://www.google.com/" class="Search-Bar">
            <input type="text" placeholder="Procure o Usuário..." name="bar">
            <button type="submit"> <img src="imagens/procurar.png">

            </button>
        </form>

    </div>

    <?php 
        require("Model/acessaBD.php");
        session_start();
        exibeTodos($_SESSION['username'], $_SESSION['password']);
    ?>
</body>
</html>