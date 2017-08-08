<?php

$xml= new DOMDocument;

$xml->load( "xml/vendas.xml" ); // Se o XML for externo, troque "gamefc.xml" pelo link

if (!$xml) {
    echo "Erro ao abrir arquivo!";
    exit;
}

$ver = simplexml_import_dom($xml);


echo "<table class='table table-striped table-inverse'>";
echo "<thead>"; 
echo "<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>E-mail</th>
	  </tr>";

foreach ($ver as $valor) {
echo "<tbody>";
echo "<tr>";
echo "<td>" . $valor->idcontato . "</td>";
echo "<td>" . $valor->nome ."</td>";
echo "<td>" . $valor->email ."</td>";
echo "</tr>";
echo "</tbody>";
}
echo "</table>";

?>