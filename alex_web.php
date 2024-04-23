<?php

$conn=mysqli_connect('localhost', 'usuario1', '1234', 'Usuaris');

if (!$conn) {

    echo "Error en la conexion;:" . mysqli_connect_error();
    exit;
}

?>


<!DOCTYPE html>

<html>

    <head>

        <title>Resultat de la selecció de dades</title>

        <meta charset="utf-8">

    </head>

    <body>
        <table border=1>
       
        <tr><td>Id</td><td>Nom</td><td>Cognom1</td><td>Cognom2</td></tr>
        <?php
        $resultado = mysqli_query($conn, "SELECT * FROM dades");
        while ($registro = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro['id'] . "</td>";
            echo "<td>" . $registro['nom'] . "</td>";
            echo "<td>" . $registro['cognom1'] . "</td>";
            echo "<td>" . $registro['cognom2'] . "</td>";
            echo "</tr>";

        } 
        ?>
        </table>
    </body>

</html>

