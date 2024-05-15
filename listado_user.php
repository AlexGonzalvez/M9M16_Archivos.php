<?php



$conn=mysqli_connect('localhost', 'usuario1', '1234', 'Usuaris');

/**

 * Función de conexión del usuario a la BD

 */

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
        background-image: url("img/biblioteca.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    h1{
        font-size:290%;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; 
        text-align: center;
        color: rgb(255, 254, 224);
        margin-top:3%;


    }
    table {
    width: 50%;
    height:350px;
    border: 1.5px solid black;
    position: relative;
    top: 160px; left: 25%;
    background-color: rgb(254, 251, 235)
    }

    td, tr {
      font-size: 105%; 
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; 
    }


    .enlace { 
        color: white;
        font-size:150%;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        margin-left:1%;
    }


</style>
    <head>
        <title>Listado de registros con la actualizacion</title>
        <p><a class="enlace" href ="alex_web.php">Cerrar sesión</a></p>

    </head>
    <body>
        <h1>LISTADO ACTUALIZADO DE REGISTROS DE USUARIOS DE LA BIBLIOTECA</h1>
        <table border=1>
            <tr><td><b>Nombre</b></td><td><b>Apellido1</b></td><td><b>Apellido2</b></td><td><b>Accion</b></td></tr>
            <?php
            $resultado = mysqli_query($conn, "SELECT * FROM usuarios");
            while ( $registro = mysqli_fetch_array($resultado) ) {
                echo "<tr>";
                echo "<td>" . $registro['nom'] . "</td>";
                echo "<td>" . $registro['cognom1'] . "</td>";
                echo "<td>" . $registro['cognom2'] . "</td>";

                $link_actualizacion = "formularioactualizacion_user.php?id=" . $registro['id'];
                $link_eliminacion = "eliminacion.php?id=" . $registro['id'];
                $link_añadir="formulario_user.php";
                echo "<td><a href=\"$link_actualizacion\">Actualizar</a> / <a href=\"$link_eliminacion\">Eliminar</a></td>";
                echo "</tr>";
            }
            echo "<td><a href=\"$link_añadir\">Añadir un nuevo registro</a></td>";
            ?>
        </table>
    </body>

</html>
