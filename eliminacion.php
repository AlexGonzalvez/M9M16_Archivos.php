<?php
/**

 * Función de conexión del usuario a la BD

 */



$conn=mysqli_connect('localhost', 'usuario1', '1234', 'Usuaris');

if (!$conn) {

    echo "Error en la conexion;:" . mysqli_connect_error();
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario de eliminación de un registro</title>
    </head>
    <body>

        <?php

	/**

	 * Función que elimina los datos de la BD

 	*/



        $id = $_GET["id"];
        $consulta_eliminacion = "DELETE FROM dades WHERE id = $id";

        if (!mysqli_query($conn, $consulta_eliminacion)) {
            ?>
            Error en la eliminación!
            <?php
        } 
        
        else{
            ?>

            Eliminacion realizada con éxito! <a href = "actualizacion.php">Volver al listado</a>
            
            <?php
        }

        ?>
    </body>
</html>

        
