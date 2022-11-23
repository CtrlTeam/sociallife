<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Conta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="fundo">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <?php
        $erro  = explode("=", $_SERVER["REQUEST_URI"]);
        if(sizeof($erro)>1){
            $erro = $erro[1];
        }else{
            $erro = null;
        }
        $texto = "";
    ?>


    <div class="flex horizontal center">
        <div class="flex vertical center box card">
            <h1>Crie sua conta</h1>
            <?php
                if(!is_null($erro)){
                    $texto .= '<div class="alert alert-danger" role="alert">';
                    if ($erro == "1") {
                        $texto .= 'Nome de usuário não pode ser vazio!';
                    }
                    if ($erro == "2") {
                        $texto .= 'Nome de usuário não disponível!';
                    }
                    if ($erro == "3") {
                        $texto .= 'Email não disponível!';
                    }
                    $texto .= '</div>';
                    echo $texto;
                }
            ?>
            <form class="flex vertical" id="formCadastro" method="post"
            action="Controller/Cadastro.php" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="Nome de usuário" require>
            <input type="password" name="password" id= "password" placeholder="Senha" require>
            <input type="email" name="email" id= "email" placeholder="Email" require>
            <input type="date" name="date" id= "date" placeholder="Data de nascimento" require>
            <div class="flex vertical center">
                <p>Coloque uma foto de perfil: </p>
                <img src="" alt="" id="uploadPreview" class="foto"><br>
            </div>
            <input type="file" id="uploadImage" accept="image/*" name="foto" onchange="PreviewImage();"/>
            <script type="text/javascript">
                function PreviewImage(){
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
                    oFReader.onload = function(oFREvent){
                        document.getElementById("uploadPreview").src = oFREvent.target.result;
                    }
                }
            </script>
            <input type="submit" class="button" value= "CADASTRAR">
            </form>
            </div>
            </div>
</body>
</html>