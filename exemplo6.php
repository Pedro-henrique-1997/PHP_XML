<?php

$xml = simplexml_load_file("paises3.xml");

echo "Nome:  " . $xml->nome . "<br>";
echo "Idioma:  " . $xml->idioma . "<br>";

echo "<br>";

echo "Estados";

echo $xml->estados->nome[0];

foreach($xml->estados->nome as $estados){
	echo "Estados: " .$estados . "<br>";
}


?>