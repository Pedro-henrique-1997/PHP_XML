<?php

$xml = simplexml_load_file("paises4.xml");

foreach ($xml->estados->estado as $estados) {
	echo str_pad("Estados: " . $estados['nome'], 30),
	            'Capital:  '. $estados['capital'] . "<br>";
}
?>