<?php      
       
       //o script sem validar baixa o arquivo determinado pelo GET
       //Porem não impedi a manipulação da URL feito pelo usuário.
 
       function download_arquivo($arquivo){
        //Tamanho do arquivo em bytes.
        $tamanho = filesize("$arquivo");
        //Pegando extensão do arquivo.
        $ext = explode (".",$arquivo);
        //pega o nome do arquivo
        $nome = $ext[0];
        //Envia cabeçalhos HTTP  informações tipo, tamanho entre outras.
        header("Content-Type: application/save");
        header("Content-Length: $tamanho");
        header("Content-Disposition: attachment; filename=$nome.$ext[1]");
        header("Content-Transfer-Encoding: binary");
        //Nesse momento envia o arquivo.
        $fp = fopen("$arquivo", "r");
        fpassthru($fp);
        fclose($fp);
       }
       //Usando a function Dowload
       download_arquivo($_GET['arquivo']);
 
     //ex: http://localhost:8080/Site/baixar.php?arquivo=tutorial.pdf
 
 
?>
