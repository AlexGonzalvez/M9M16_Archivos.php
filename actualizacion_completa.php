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
                <h1>Error en la actualizacion!</h1>
                <?php
            } else {
                ?>
                <h1>Actualización realizada! <a href ="listado_user.php">Volver al listado</a></h1>
                <?php

            }
        ?>
    </body>
</html>

