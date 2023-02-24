<?php
include("./inc/settings.php");
validate();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/functions.js"></script>

    <link rel="stylesheet" href="./css/styles.css">

</head>

<body>

    Bienvenido a mi CRUD,
    <?= $_SESSION["nombre"] ?>
    <?= $_SESSION["apellido1"] ?>
    <?= $_SESSION["apellido2"] ?>
    || <a href="logout.php">Log out.</a><br>

    <?php

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT column1, column2, column3, column4, column5 FROM table1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<br><table border='1'><tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Num.</th>
                <th>Num. Float</th>

                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "\n<tr>
                <td>" . $row["column1"] . "</td>
                <td>" . $row["column2"] . "</td>
                <td>" . $row["column3"] . "</td>
                <td>" . $row["column4"] . "</td>
                <td>" . $row["column5"] . "</td>";

            echo "<td><a href='update.php?column1=" . $row["column1"] . "' onclick='return confirm()'><img src='./img/update.png'></a></td>
                <td><a href='delete.php?column1=" . $row["column1"] . "' onclick='return confirmMod()'><img src='./img/delete.png'></a></td>
            </tr>\n";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <br>
    <form action="insert.php" method="POST">

        <fieldset>
            <legend>Inserte la información del nuevo registro:</legend>
            ID: <input type="number" name="identifier" id="" value="1975" required><br>
            Nombre: <input type="text" name="name" id="" value="Humberto"><br>
            Fecha: <input type="date" name="date" id="" value="1976-06-23"><br>
            Número: <input type="double" name="num" id="" value="10000"><br>
            Núm. Float: <input type="float" name="fnum" id="" value="12.1"><br>
            <br>
            <input type="submit" value="Agregar"><br>
        </fieldset>

</body>

</html>