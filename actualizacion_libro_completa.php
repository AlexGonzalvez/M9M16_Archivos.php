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
    <head>
        <title>Formulario de actualización de un registro</title>
    </head>
    <body>
        <?php

	    /**

	 * Función de actualizacion de los datos

 	*/


            $id = $_GET['id'];
            $consulta_act = "UPDATE libros SET libro_isbn = '" . $_POST['libro_isbn'] . "',
                                              titulo = '" . $_POST['titulo'] . "',
                                              descripcion = '" . $_POST['descripcion'] . "',
                                              autor_ID = '" . $_POST['autor_ID'] . "'
                                              WHERE libro_id=$id";
            if (!mysqli_query($conn, $consulta_act)) {
                ?>
                <h1>Error en la actualizacion!</h1>
                <?php
            } else {
                ?>
                <h1>Actualización realizada! <a href ="listado_libros.php">Volver al listado de libros</a></h1>
                <?php

            }
        ?>
    </body>
</html>
