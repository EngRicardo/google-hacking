<?php
if(isset($_FILES['file'])){
    $file = $_FILES['file'];

    //propriedades do arquivo
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    //checando se é txt
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $allowed = array('txt');

    if(in_array($file_ext, $allowed)){
        if($file_error == 0){
            if($file_size <= 2097152){
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                $file_destination = '/home/vhosts/maravilhasdomundomoderno.freevar.com/google-hacking/uploads/' . $file_name_new;

                if(move_uploaded_file($file_tmp, $file_destination)){
                    session_start();
                    $_SESSION['arquivo_dest'] = $file_destination;
                    $_SESSION['nome_arqv'] = $file_name_new;
                    echo '<p>Upload realizado com sucesso!!!</p>';
                    echo '<p>O arquivo "', $file_name, '" teve seu nome aterado para: </p>', '<p>Novo nome: ', $file_name_new, '</p>', '<p>Aperte "Continuar" para prosseguir</p>';
                    echo '<br>',
                    '<form action="multiextract.php">
                    <input type="submit" value="Continuar">
                    </form>';
                    
                }else{
                    echo "Erro: Falha ao salvar o arquivo, tente novamente";
                }
            }else{
                echo "Erro: O arquino é muito grande, não é aceito arquivos maiores que 2MB";
            }
        }else{
            echo "Erro: Falha ao enviar o arquivo, tente novamente";
        }
    }else{
        echo "Erro: O arquino não é um .txt";
    }
}



?>