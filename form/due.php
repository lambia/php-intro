<?php
// $msg = "Benvenuto, " . $_GET["name"] . " " . $_GET["surname"];

//Per gestire dati nulli (es. index.php senza passare nulla)
$nome = $_GET["name"] ?? "Visitatore";
$cognome = $_GET["surname"] ?? "Sconosciuto";
// $cognome =  isset($_GET['user']) ? $_GET['surname'] : 'Sconosciuto';

//Per gestire parametri definiti ma come stringa vuota (es. form vuoto)
if ($nome == "") {
    $nome = "Visitatore";
}

$msg = "Benvenuto, $nome $cognome";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUE</title>
</head>

<body>
    <!-- <h1><?php /* $msg = "cancellato" */ ?></h1> -->
    <h1><?php echo $msg ?></h1>
    <a href="uno.php">Torna alla pagina di inserimento</a>
</body>

</html>