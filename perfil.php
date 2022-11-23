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
    <title>Perfil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="flex vertical center">
        <?php include("resources/header.php"); ?>
        <?php
            require("Model/acessaBD.php");
            session_start();
            $dados = retornaDadosDoPerfil($_SESSION['username']);
        ?>
        <div class="flex horizontal box"> 
            <img src="<?php echo "imagens/".$dados['foto'] ?>" alt="" style="width: 20%; height: 20%;" class="foto">
            <div id="perfil">
                <h2><?php echo $dados['username'] ?></h2>
                <p>Email: <?php echo $dados['email'] ?></p>
                <p>
                    <?php
                        list($ano, $mes, $dia) = explode('-', $dados['dtNasc']);
                        echo "Data de Nascimento: $dia/$mes/$ano";
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>