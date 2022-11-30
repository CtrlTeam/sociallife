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
    <title>Feed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="fundo"> 
<?php include ("resources/header.php"); ?>
    <div class="flex vertical center"></div>

        <form action="Controller/Post.php" method="post" id="postForm">
            <input required type="text" name="post" id="post" placeholder="Digite sua mensagem...">
            <input type="submit" value="Postar">
        </form>
        
        <div class="flex vertical box">
            <?php 
                require("Model/acessaBD.php");
                session_start();
                exibePosts();
            ?>
        </div>
</body>
</html>