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
                echo "Insercion de datos realizada INCORRECTAMENTE";
            } else {
                echo "Insercion de datos realizada CORRECTAMENTE";
            }
        ?>
    </body>
</html>
