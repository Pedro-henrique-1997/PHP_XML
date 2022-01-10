<?php

$xml = simplexml_load_file("paises.xml");

echo "Nome:  " .$xml->nome . "<br>";
echo "Idioma:  " .$xml->idioma . "<br>";
echo "Religiao:  " .$xml->religiao . "<br>";
echo "Moeda:  " .$xml->moeda . "<br>";
echo "Populacao:  " .$xml->populacao . "<br>";


?>