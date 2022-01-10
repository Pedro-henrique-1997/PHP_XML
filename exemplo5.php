<?php

$xml = simplexml_load_file("paises2.xml");

$xml->populacao = "700 milhoes";
$xml->religiao = "evangelica";
$xml->geografia->clima = "frio";

$xml->addchild('presidente', 'seu madruga');
$xml->addchild('capital', 'brasilia');

echo $xml->asXML();

file_put_contents('paises2.xml', $xml->asXML());

?>