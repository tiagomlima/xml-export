<?php
$con = mysqli_connect('localhost', 'root', '', 'script') or die ('Erro ao conectar');
$sql = 'SELECT id, name, email FROM contatos ORDER BY id';
$rs = mysqli_query($con, $sql);
$xml = "<?xml version='1.0' encoding='UTF-8'?>n";//cabeçalho do arquivo
       $xml .= "<Newsletter> n";
 
       while($reg = mysqli_fetch_object($rs)){
           $xml .= "t<Contato>n";
           $xml .= "tt<idcontato>$reg->id</idcontato>n";
           $xml .= "tt<nome>$reg->name</nome>n";
           $xml .= "tt<email>$reg->email</email> n";
           $xml .= "t</Contato>n";
       }
       $xml .= "</Newsletter>";
 
       $ponteiro = fopen('backup.xml', 'w'); //cria um arquivo com o nome backup.xml
       fwrite($ponteiro, $xml); // salva conteúdo da variável $xml dentro do arquivo backup.xml
 
       $ponteiro = fclose($ponteiro); //fecha o arquivo
 
?>

<?php

$sql = 'SELECT id, name, email FROM contatos ORDER BY id';
$rs = mysqli_query($con, $sql);
$xml = "<?xml version='1.0' encoding='UTF-8'?>n";
       $xml .= "<Newsletter> n";
 
       while($reg = mysqli_fetch_object($rs)){
           $xml .= "t<Contato>n";
           $xml .= "tt<idcontato>$reg->id</idcontato>n";
           $xml .= "tt<nome>$reg->name</nome>n";
           $xml .= "tt<email>$reg->email</email> n";
           $xml .= "t</Contato>n";
       }
       $xml .= "</Newsletter>";
 
       $ponteiro = fopen('backup2.xml', 'w'); 
       fwrite($ponteiro, $xml); 
 
       $ponteiro = fclose($ponteiro); 

?>