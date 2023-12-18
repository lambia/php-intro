<?php

//Stringa iniziale
$string = "Ciao, come stai?";
echo "Stringa iniziale: <b>$string</b>";
echo "<br><br>";

//Utilizzo di explode
$array = explode(",", $string);
echo "Stringa esplosa su [,]";
echo "<pre>";
var_dump($array);
echo "</pre>";

echo "Primo elemento esploso: <b>" . $array[0] . "</b>";
echo "<br><br>";

//Utilizzo di search/replace
$string2 = str_replace("Ciao", "Buondì", $string);
echo "Nuova stringa: <b>$string2</b>";
echo "<br><br>";

//Misuriamo la lunghezza della stringa
echo "strlen: <b>" . strlen($string) . "</b>";
echo "<br><br>";

//Controlliamo la posizione del carattere "?" nella stringa
echo "strpos: <b>" . strpos($string, "?") . "</b>";
echo "<br><br>";
