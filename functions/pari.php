<?php include __DIR__ . "/main.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esempio funzioni</title>
</head>

<body>

    <?php /* var_dump(controlloPari(15)) */ ?>

    <h2>Array originale</h2>
    <ul>
        <?php foreach ($numeriOriginali as $numero) {
            echo "<li>$numero</li>";
        } ?>
    </ul>

    <h2>Array filtrato (pari)</h2>
    <ul>
        <?php foreach ($numeriPari as $numero) {
            echo "<li>$numero</li>";
        } ?>
    </ul>

    <h2>Array filtrato (a mano)</h2>
    <ul>
        <?php foreach ($nuovoArray as $numero) {
            echo "<li>$numero</li>";
        } ?>
    </ul>
</body>

</html>