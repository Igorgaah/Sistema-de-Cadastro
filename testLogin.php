<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        while($ln = mysqli_fetch_array($result)){
            $id = $ln['id'];
            $usuario = $ln['nome'];
            $nivel = $ln['admnistrador'];
}

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            $_SESSION['usuario'] = $usuario;
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            if($nivel == 1) {
                // 1 é igual a admin.
                header('Location: sistema.php');
            }else {
                //Redireciona para edit
                header('Location: edit.php');
                header('Location: edit.php?id='.$id);
            }
            
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>