<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil de Usuário | PMI</title>
        <style>
        /*Adicionar o CSS aqui */
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #A3A3A3 none no-repeat scroll 0px 0px;
        }
        .perfil { 
            width: 500px;
            margin: 0 auto;
            text-align: center;
        }
        .perfil h1{
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .perfil img{
            width: 200px;
            height: 200px;
            border-radius: 200px;
            margin-bottom: 20px;
        }
        .perfil p{
            font-size: 18px;
            margin-bottom: 10px;
        }
        .perfil label {
            font-weight: bold;
        }
        </style>
    </head>
    <body>
        <div class="perfil">
            <h1>Meu perfil</h1>
            <img src="https://via.placeholder.com/200x200" alt="Foto de perfil">
            <form action="atualizar_perfil.php" method="POST">
                <p>
                    <label>Nome:</label>
                    <input type="text" name="nome" value="">
                </p>
                <p>
                    <label>Telefone:</label>
                    <input type="text" name="telefone" value="">
                </p>    
                    <label>E-mail:</label>
                    <input type="email" name="email" value="">
                </p>
                <p>
                    <label>Idade:</label>
                    <input type="number" name="idade" value="">
                </p>
                <p>
                    <label>Cidade:</label> Itajubá
                </p>
                <p>
                    <label>País:</label> Brasil
                </p>
                <input type="submit" value="Atualizar">
            </form>
        </div>
    </body>
</html>