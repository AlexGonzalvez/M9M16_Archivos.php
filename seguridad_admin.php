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


$user_query="SELECT * FROM admin WHERE id = 1";

$user_admin = mysqli_query($conn, $user_query);

$registro = mysqli_fetch_array($user_admin); 

$nombre_admin=$registro['nombre'];


$passwd_admin= $registro['contraseña'];


$nombre = $_POST['nom'];

$contraseña= $_POST['contraseña'];



if ($nombre == $nombre_admin and $contraseña == $passwd_admin) {
   echo "<h1>Bienvenido $nombre_admin </p>";
   echo "<p>Pulse en el siguiente enlace para ver el listado de registros.</p>";
   echo "<a href = listado_admin.php>Listado de registros de usuarios</a>";
} else {
    echo "<h1><a href=alex_web.php> Volver a la página principal</a><h1>";
    echo "<h1><a href=inicio_sesion_admin.php>Iniciar sesión como admin</a><h1>";
    echo "<h1><a href=inicio_sesion_user.php>Iniciar sesión como usuario</a><h1>";
    echo "<h1 class=aviso>El usuario NO es un administrador, así que no puede continuar.</h1>";
    echo "<h1 class=consejo>Revise que el nombre de usuario y contraseña sean correctos</h1>";
}