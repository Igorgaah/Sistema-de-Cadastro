<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | PMI</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #A3A3A3 none no-repeat scroll 0px 0px;
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <div class="box">
    <img src="img/Logo-1.png" alt="Logo prefeitura">
    <br><br><br>
        <a href="login.php">Login</a>
        <div class="gender-title">
            <br>
            <h6>Ainda não tem uma conta?
                <br><br><br>
                 <a href="formulario.php">Crie uma</a></h6>
            <h6>Esqueci minha senha? 
                <br><br><br>
                <a href="#">Clique aqui</a><h6>
        </div>
    </div>
</body>
</html>