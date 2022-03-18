<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Login do Usuário</title>
</head>

<body style="background-color: white;">

    <?php


    require_once __DIR__ . "/config.php";
    if (isset($_SESSION['usuario'])) {
        header("location: {$base_path}/index.php?");
    }

    if(!empty($_GET['msg'])){
    $link = $_GET['msg'];
    if ($link == 1) {
    ?><p class="alert-danger text-center">Usuário ou senha Inválido!</a><?php
                                                                    } elseif ($link == 2) {
                                                                        ?>
        <p class="alert-danger text-center">Usuário ou senha Vazios!</a><?php
                                                                    } else {
                                                                        echo "";
                                                                    }
                                                                }else 
                                                                        ?>
        <h2 class="titulo">Login</h2>
        <div class="login-box">
            <div class="user-box">
                <form action="app/controllers/login_controller.php" method="POST">

                    <input placeholder="Usuário" type="text" name="field_usuario">
                    <input placeholder="Senha" type="password" name="field_senha">
            </div>
            <input class="button" type="submit" value="Confirmar">
            </form>
        </div>
        <br>
        <br>
        <br>

        <div class="cadastro2">
            <a href="cadastro_usuario.php" style="color: black"> Caso não tenha uma conta - Cadastre-se</a>
        </div>



</body>

</html>