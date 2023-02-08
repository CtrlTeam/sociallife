<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Social Life</title>
    <link rel="stylesheet" href="style.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
</style>
</head>
<body>
    <div class="flex horizontal center">
        <div class="flex vertical center box card">
        <h2>Bem-Vindo</h2>
        <form action="Controller/Logar.php" method="post" class ="flex vertical">
            <input type="text" name="username" id="username" placeholder="NOME DE USUÁRIO">
            <input type="password" name="password" id="password" placeholder="SENHA">
            <input class="button" type="submit" value="ENTRAR">
            <div class="link">
            <a href="#resetesuasenha" id="forgot-pass"><strong>ESQUECEU SUA SENHA?</strong></a>
            </div>
            <a class="button" href="cadastro.php">CADASTRE-SE</a>
    </form>
    </div>
    <div>
        <img src="imagens/imagem_2022-11-23_183614281-removebg-preview.png" alt="">
    </div>
 </div>
</body>
</html>