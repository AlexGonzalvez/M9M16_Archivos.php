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
    margin-bottom:-5%;
    margin-top:5%;
    margin-left:25%;

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
        <p><a class="enlace" href ="alex_web.php">Cerrar sesión</a><a class="enlace" href ="libros_autores.php">Volver al listado de libros y autores</a><a class="enlace" href ="listado_admin.php">Listado de registros con sus usuarios</a></p>

    </head>
    <body>
        <h1>LISTADO COMPLETO DE LIBROS</h1>
        <table border=1>
            <tr><td><b>Libro_ID</b></td><td><b>ISBN</b></td><td><b>Titulo</b></td><td><b>Descripcion</b></td><td><b>Autor_ID</b></td><td><b>Accion</b></td></tr>
            <?php
            $resultado = mysqli_query($conn, "SELECT * FROM libros");
            while ( $registro = mysqli_fetch_array($resultado) ) {
                echo "<tr>";
                echo "<td>" . $registro['libro_id'] . "</td>";
                echo "<td>" . $registro['libro_isbn'] . "</td>";
                echo "<td>" . $registro['titulo'] . "</td>";
                echo "<td>" . $registro['descripcion'] . "</td>";
                echo "<td>" . $registro['autor_ID'] . "</td>";


                $link_actualizacion = "formulario_actualizar_libro.php?id=" . $registro['libro_id'];
                $link_eliminacion = "eliminar_libro.php?id=" . $registro['libro_id'];
                $link_añadir="formulario_añadir_libro.php";
                $link_libros="listado_libros.php";
                $link_autores="listado_autores.php";
                echo "<td><a href=\"$link_actualizacion\">Actualizar</a> / <a href=\"$link_eliminacion\">Eliminar</a></td>";
                echo "</tr>";
            }
            echo "<td><a href=\"$link_añadir\">Añadir un nuevo registro</a></td>";
            echo "<td><a href=\"$link_autores\">Ver datos completos de los autores</a></td>";
            ?>
        </table>
        <p></p>
    </body>

</html>
