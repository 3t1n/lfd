<?php      
       
//Script utilizado para baixar arquivos do meu site, como planilhas e pdf.

function baixar_arquivo($arquivo){     
     //Pegando a extensão do arquivo.
     $final = explode(".",$arquivo);
     $ext = end($final);
     //Validando a extensão
     if ($ext != "pdf") {
     echo "Arquivo não autorizado para download!";
      exit();
    }
    //regex responsável para filtrar e não deixar passar comandos de pasta ../../../
    $nome_download =str_replace($ext,"",preg_replace('/[^a-zA-Z0-9\_]/',"",$arquivo)).".".$ext;
    if(file_exists($nome_download)){
        //cria uma hash md5 com a data atual
        $nome = md5(time());
        $tamanho = filesize($arquivo);
        //Envia cabeçalhos HTTP  informações tipo, tamanho entre outras.
        header("Content-Type: application/save");
        header("Content-Length: $tamanho");
        header("Content-Disposition: attachment; filename=$nome.$ext");
        header("Content-Transfer-Encoding: binary");
        //Nesse momento envia o arquivo.
        $fp = fopen($nome_download, "r");
        fpassthru($fp);
        fclose($fp);
    }else{
        echo "Arquivo não existe!";
        exit();
    }

}
baixar_arquivo($_GET['arquivo']);
?>
