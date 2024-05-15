<DOCTYPE html>

<style>
html{
    background-image: url("img/imagen_sesion.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;

}

h1{

font-size:290%;
font-family: font-family: "Gill Sans Extrabold", sans-serif; 
text-align: center;
color: rgb( 202, 246, 244 );;
margin-top:3%;
}

.consejo{
    color:gold;
}

.aviso{
    color:red;
}
</style>


<?php

/**

 * Función de conexión del usuario a la BD

 */




$conn=mysqli_connect('localhost', 'usuario1', '1234', 'Usuaris');

$encontrado=False;

if (!$conn) {

    echo "Error en la conexion;:" . mysqli_connect_error();
    exit;
}


$user_query="SELECT * FROM users_registrados";

$user = mysqli_query($conn, $user_query);

$nombre = $_POST['nom'];

$contraseña= $_POST['contraseña'];


while ( $registro = mysqli_fetch_array($user) ) {
    $nombre_user=$registro['nombre'];
    $passwd_user=$registro['contraseña'];


    if ($nombre == $nombre_user and $contraseña == $passwd_user) {
        $encontrado=True;
     } 

}

if ($encontrado == True){
    echo "<h1>Bienvenido $nombre</p>";
        echo "<p>Pulse en el siguiente enlace para ver el listado de registros.</p>";
        echo "<a href = listado_user.php>Listado de registros de usuarios</a>";
}

else{
    echo "<h1><a href=alex_web.php> Volver a la página principal</a><h1>";
    echo "<h1><a href=inicio_sesion_admin.php>Iniciar sesión como admin</a><h1>";
    echo "<h1><a href=inicio_sesion_user.php>Iniciar sesión como usuario</a><h1>";
    echo "<h1 class=aviso>El usuario NO está registrado, así que no puede continuar.</h1>";
    echo "<h1 class=consejo>Revise que el nombre de usuario y contraseña sean correctos</h1>";
}




