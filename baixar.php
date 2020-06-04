<?php      
       
//Script utilizado para baixar arquivos do meu site

function baixar_arquivo($arquivo){
    $tamanho = filesize("$arquivo");
    //Envia cabeçalhos HTTP  informações tipo, tamanho entre outras.
    header("Content-Type: application/save");
    header("Content-Length: $tamanho");
    header("Content-Disposition: attachment; filename=$arquivo");
    header("Content-Transfer-Encoding: binary");
    //Nesse momento envia o arquivo.
    $fp = fopen("$arquivo", "r");
    fpassthru($fp);
    fclose($fp);
}
//Percebam como eu recebo o GET do usuário e não realizo nenhum tratamento nele e ai que está nossa vulnerabilidade.
baixar_arquivo($_GET['arquivo']);

?>
