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


$nombre = $_POST['nom'];
$apellido1 = $_POST['cognom1'];
$apellido2 = $_POST['cognom2'];
$adreca = $_POST['adreca'];
$cp = $_POST['cp'];
$ciutat = $_POST['ciutat'];
$pais = $_POST['pais'];
$telefon = $_POST['telefon'];
$data = $_POST['datanaixement'];

$insercion_sql = "INSERT INTO dades VALUES (NULL, '$nombre', '$apellido1', '$apellido2', '$adreca', '$cp', '$ciutat', '$pais', '$telefon', '$data')";
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
                echo "<h1>Insercion de datos realizada INCORRECTAMENTE</h1>";
            } else {
                echo "<h1>Insercion de datos realizada CORRECTAMENTE</h1>";
                echo "<h1><a href=alex_web.php>Volver al menú principal</a></h1>";
            }
        ?>
    </body>
</html>
