<?php
$sql = 'SELECT id, name, email FROM contatos ORDER BY id';
$rs = mysqli_query($conn, $sql);
$xml = "<?xml version='1.0' encoding='ISO8859-1'?>";//cabeçalho do arquivo
       $xml .= "<Newsletter>";
 		//corpo do arquivo xml
       while($reg = mysqli_fetch_object($rs)){
           $xml .= "<Contato>";
           $xml .= "<idcontato>$reg->id</idcontato>";
           $xml .= "<nome>$reg->name</nome>";
           $xml .= "<email>$reg->email</email>";
           $xml .= "</Contato>n";
       }
       $xml .= "</Newsletter>";
 
       $ponteiro = fopen('xml/produtos.xml', 'w'); //cria um arquivo com o nome produtos.xml
       fwrite($ponteiro, $xml); // salva conteúdo da variável $xml dentro do arquivo produtos.xml
 
       $ponteiro = fclose($ponteiro); //fecha o arquivo

?>