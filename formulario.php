<?php

if(isset($_FILES['curriculo'])) {
    $curriculo = $_FILES['curriculo'];
    
    // Obtém informações sobre o nome do arquivo
    $info = pathinfo($curriculo['name']);
    
    // Obtém a extensão do arquivo
    $extensao = $info['extension'];
    
    // Verifica se a extensão é permitida
    $extensoes_permitidas = array('pdf', 'doc', 'docx');
    if(!in_array($extensao, $extensoes_permitidas)) {
        echo "Extensão de arquivo inválida. Por favor, escolha um arquivo PDF, DOC ou DOCX.";
        exit;
    }
    
    // Verifica o tamanho do arquivo
    $tamanho_maximo = 1000000; // 1 MB
    if($curriculo['size'] > $tamanho_maximo) {
        echo "O tamanho do arquivo excede o limite permitido. Por favor, escolha um arquivo menor.";
        exit;
    }

    // verifica se foi enviado um arquivo
if(isset($_FILES['pdf_file']) && $_FILES['pdf_file']['error'] == 0) {
    $file_name = $_FILES['pdf_file']['name'];
    $file_size = $_FILES['pdf_file']['size'];
    $file_tmp = $_FILES['pdf_file']['tmp_name'];
    $file_type = $_FILES['pdf_file']['type'];
    
    // verifica se o arquivo é do tipo PDF
    if($file_type == 'application/pdf') {
        // define o diretório onde o arquivo será salvo
        $target_dir = "uploads/";
        // renomeia o arquivo com um nome único
        $new_name = uniqid() . "_" . $file_name;
        $target_file = $target_dir . $new_name;
        
        // move o arquivo para o diretório definido
        if(move_uploaded_file($file_tmp, $target_file)) {
            echo "Arquivo enviado com sucesso.";
        } else {
            echo "Erro ao enviar arquivo.";
        }
    } else {
        echo "Apenas arquivos do tipo PDF são permitidos.";
    }
}
    
    // Upload do arquivo
    move_uploaded_file($curriculo['tmp_name'], 'uploads/' . $curriculo['name']);
    echo "Upload concluído com sucesso.";
}

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Curso: ' . $_POST['Curso']);
        // print_r('<br>');
        // print_r('Data de Conclusao: ' . $_POST['data_conclusao']);
        // print_r('<br>');
        // print_r('Curriculo: ' . $_POST['curriculo']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $curso = $_POST['curso'];
        $data_con = $_POST['data_conclusao'];
        $curriculo = $_POST['curriculo'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,curso,data_con,curriculo) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$curso','$data_con','$curriculo')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | PMI</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #A3A3A3 none no-repeat scroll 0px 0px;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 50px;
            border-radius: 15px;
            width: 20%;
            border: 3px solid dodgerblue;
        }
     
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            margin-top: -65px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #data_conclusao{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <!--<a href="home.php">Voltar</a>-->
    <div class="box">
        <legend><b>Fórmulário de Estagiários</b></legend>
        <form action="formulario.php" method="POST" enctype="multipart/form-data">                
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="curso" id="curso" class="inputUser" required>
                    <label for="curso" class="labelInput">Curso Matriculado</label>
                </div>
                <br><br>
                <label for="data_conclusao"><b>Data Conclusão de Curso:</b></label>
                <input type="date" name="data_conclusao" id="data_conclusao" required>
                <br><br>
                <label for="curriculo">Insira seu curriculo:</label>
                <br><br>
                <input type="file" name="curriculo">
                <br><br>
                <input type="submit" name="submit" id="submit">
                <form action="upload.php" method="post" enctype="multipart/form-data">
        </form>
    </div>
</body>
</html>