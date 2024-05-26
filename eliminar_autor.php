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
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario de eliminación de un autor</title>
    </head>
    <body>

        <?php

	/**

	 * Función que elimina los datos de la BD

 	*/



        $id = $_GET["id"];
        $consulta_eliminacion = "DELETE FROM autores WHERE autor_ID = $id";

        if (!mysqli_query($conn, $consulta_eliminacion)) {
            ?>
            <h1>Error en la eliminación!</h1>
            <?php
        } 
        
        else{
            ?>

            <h1>Eliminacion realizada con éxito! <a href = "listado_autores.php">Volver al listado de autores</a></h1>
            
            <?php
        }

        ?>
    </body>
</html>

        
