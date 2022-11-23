<?php
    require("../Model/acessaBD.php");
    if(confereCadastro($_POST['username'], $_POST['password'])){
        setcookie("autenticacao", $_POST['username'], time()+36000, "/"); 
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header('Location:'.'../perfil.php');
    }else{ 
        header('Location:'.'../index.php?erro=1');
    }

    ?>