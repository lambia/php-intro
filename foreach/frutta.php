<?php

$booleano = false;

$frutta = [
    "mele",
    "pere",
    "ananas"
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esempi Foreach</title>
</head>

<body>

    <!-- If su booleano tutto in tag  -->
    <?php if ($booleano) {
        echo "Booleano TRUE";
    }
    ?>

    <!-- If su booleano misto PHP/HTML  -->
    <?php if ($booleano) { ?>
        <p>Booleano TRUE</p>
    <?php } ?>

    <!-- Foreach tutto in tag  -->
    <ul>
        <?php
        foreach ($frutta as $frutto) {
            echo "<li>$frutto</li>";
        }
        ?>
    </ul>

    <!-- Foreach misto PHP/HTML  -->
    <ul>
        <?php foreach ($frutta as $frutto) { ?>
            <li>
                <!-- Sintassi echo semplice -->
                <?php /*echo $frutto*/ ?>
                <!-- Sintassi Shorthand per echo -->
                <?= $frutto ?>
            </li>
        <?php } ?>
    </ul>

</body>

</html>