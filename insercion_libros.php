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

</style>

</html>


<?php

/**

 * Función de conexión del usuario a la BD

 */


$conn=mysqli_connect('localhost', 'usuario1', '1234', 'Usuaris');

if (!$conn) {

    echo "Error en la conexion;:" . mysqli_connect_error();
    exit;
}

/**

 * Insercion de los datos a la BD

 */


$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$autor_ID = $_POST['autor_ID'];


$insercion_sql = "INSERT INTO libros (libro_isbn, titulo, descripcion, autor_ID) VALUES ('$isbn', '$titulo', '$descripcion', '$autor_ID')";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Resultado de la inserción de datos</title>
    </head>
    <body>
        <?php
            $resultado = mysqli_query($conn, $insercion_sql);
            if (!$resultado) {
                echo "<h1>Insercion de datos realizada INCORRECTAMENTE </h1>";
                echo "<h1><a href =listado_user.php>Volver al listado</a></h1>";
            } else {
                echo "<h1>Insercion de datos realizada CORRECTAMENTE</h1>";
                echo "<h1><a href =listado_user.php>Volver al listado</a></h1>";
            }
        ?>
    </body>
</html>
