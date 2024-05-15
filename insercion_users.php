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
    echo "Se han introducido un nombre o contraseña vacías. Vuelva a introducir los datos";

}

else{
    
    if ($continuar==True){

        $insert_query="INSERT INTO users_registrados (nombre, contraseña) VALUES ('$nombre', '$contraseña')";
        $resultado = mysqli_query($conn, $insert_query);
        if (!$resultado) {
            echo "Insercion de datos realizada INCORRECTAMENTE";
        } else {
            echo "Insercion de datos realizada CORRECTAMENTE";
        }

    }    
   


else{
    echo "Este usuario ya existe en la base de datos";
}


}

