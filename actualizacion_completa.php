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
            $consulta_act = "UPDATE dades SET nom = '" . $_POST['nom'] . "',
                                              cognom1 = '" . $_POST['cognom1'] . "',
                                              cognom2 = '" . $_POST['cognom2'] . "',
                                              adreca = '" . $_POST['adreca'] . "',
                                              cp = '" . $_POST['cp'] . "',
                                              ciutat = '" . $_POST['ciutat'] . "',
                                              pais = '" . $_POST['pais'] . "',
                                              telefon = '" . $_POST['telefon'] . "',
                                              datanaixement = '" . $_POST['datanaixement'] . "'
                                              WHERE id=$id";
            if (!mysqli_query($conn, $consulta_act)) {
                ?>
                Error en la actualizacion!
                <?php
            } else {
                ?>
                Actualización realizada! <a href ="actualizacion.php">Volver al listado</a>
                <?php

            }
        ?>
    </body>
</html>

