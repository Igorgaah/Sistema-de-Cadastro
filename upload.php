<?php
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
?>
