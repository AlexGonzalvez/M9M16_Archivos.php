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

$continuar=True;

$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

$vacio=False;

$user_query="SELECT * FROM users_registrados";

$user = mysqli_query($conn, $user_query);


while ( $registro = mysqli_fetch_array($user) ) {
    $nombre_user=$registro['nombre'];
    $passwd_user=$registro['contraseña'];


    if ($nombre == $nombre_user and $contraseña == $passwd_user) {
        $continuar=False;
    }
    
    if ($nombre == '' or $contraseña == '') {
        $vacio=True;
    }

}

if ($vacio==True){
    echo "<h1>Se han introducido un nombre o contraseña vacías. Vuelva a introducir los datos</h1>";

}

else{
    
    if ($continuar==True){

        $insert_query="INSERT INTO users_registrados (nombre, contraseña) VALUES ('$nombre', '$contraseña')";
        $resultado = mysqli_query($conn, $insert_query);
        if (!$resultado) {
            echo "<h1>Insercion de datos realizada INCORRECTAMENTE</h1>";
            echo "<h1><a href =listado_user.php>Volver al listado</a></h1>";
        } else {
            echo "<h1>Insercion de datos realizada CORRECTAMENTE</h1>";
            echo "<h1><a href =listado_user.php>Volver al listado</a></h1>";
        }

    }    
   


else{
    echo "Este usuario ya existe en la base de datos";
}


}

