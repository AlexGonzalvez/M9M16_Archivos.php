<?php

$conn=mysqli_connect('localhost', 'usuario1', '1234', 'Usuaris');

if (!$conn) {

    echo "Error en la conexion;:" . mysqli_connect_error();
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<style type="text/css" media="screen">
    html{
        background: rgba(137, 242, 228, 0.8);
    }
    h1{
        font-size:230%;
        font-family:"Gill Sans Extrabold", Helvetica, sans-serif;
        text-align: center;
    }
    table {
    table-layout: fixed;
    width: 70%;
    border: 1.5px solid black;
    position: relative;
    top: 70px; left: 15%;
    background-color:rgb(204, 255, 204);
}

</style>
    <head>
        <title>Listado de registros con la actualizacion</title>
    </head>
    <body>
        <h1>LISTADO ACTUALIZADO DE REGISTROS</h1>
        <table border=1>
            <tr><td><b>Nombre</b></td><td><b>Apellido1</b></td><td><b>Apellido2</b></td><td><b>Accion</b></td></tr>
            <?php
            $resultado = mysqli_query($conn, "SELECT * FROM dades");
            while ( $registro = mysqli_fetch_array($resultado) ) {
                echo "<tr>";
                echo "<td>" . $registro['nom'] . "</td>";
                echo "<td>" . $registro['cognom1'] . "</td>";
                echo "<td>" . $registro['cognom2'] . "</td>";

                $link_actualizacion = "formularioactualizacion.php?id=" . $registro['id'];
                $link_eliminacion = "eliminacion.php?id=" . $registro['id'];
                $link_añadir="formulario.php";
                echo "<td><a href=\"$link_actualizacion\">Actualizar</a> / <a href=\"$link_eliminacion\">Eliminar</a></td>";
                echo "</tr>";
            }
            echo "<td><a href=\"$link_añadir\">Añadir un nuevo registro</a></td>";
            ?>
        </table>
    </body>
</html>
