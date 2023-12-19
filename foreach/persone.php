<?php
$persone = [
    [
        "name" => "John",
        "lastname" => "Doe",
        "age" => 33,
        "mail" => "john@doe.com",
        "password" => "asfagd249#"
    ],
    [
        "name" => "Mario",
        "lastname" => "Rossi",
        "age" => 52,
        "mail" => "mario@rossi.com",
        "password" => "adhsjfj#"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esempi Foreach</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Foreach su persone -->
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Et&agrave;</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            /*
            foreach ($persone as $persona) {
                echo "<tr>";
                echo "<td>" . $persona['name'] . "</td>";
                echo "<td>" . $persona['lastname'] . "</td>";
                echo "<td>" . $persona['age'] . "</td>";
                echo "<td>" . $persona['mail'] . "</td>";
                echo "<td>" . $persona['password'] . "</td>";
                echo "</tr>";
            }
            */

            foreach ($persone as $persona) {
                echo "<tr>";
                foreach ($persona as $key => $value) {
                    echo ($key == "password") ? "<td>***</td>" : "<td>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>