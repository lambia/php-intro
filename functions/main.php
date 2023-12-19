<?php

include __DIR__ . "/functions.php";

$numeriOriginali = [1, 2, 3, 4, 5, 6];

$nuovoArray = [];
foreach ($numeriOriginali as $numero) {

    if (controlloPari($numero)) {
        $nuovoArray[] = $numero;
    }
}

// $numeriPari = array_filter($numeriOriginali, "controlloPari");
$numeriPari = array_filter($numeriOriginali, fn ($numero) => $numero % 2 === 0);
// $numeriPari conterrà solo [2, 4, 6]
