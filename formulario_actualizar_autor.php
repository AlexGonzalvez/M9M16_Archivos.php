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
<style type="text/css" media="screen">
html{
        background: rgb(255, 254, 224);
        background-image: url("img/formulario_actualizar.jpg");

    }

    h1{
        font-size:270%;
        font-family:"Gill Sans Extrabold", Helvetica, sans-serif;
        text-align: center;
        color: rgb( 252, 255, 209);
        font-weight:bold;
        margin-top:3%;
    }

    table {
    width: 70%;
    height:700px;
    border: 1.5px solid black;
    margin-bottom:2%;
    position: relative;
    top: 10%; left: 15%;
    background-color: rgb(  209, 255, 232);
    margin-top:5%;
    }

    .button{
        height:50px;
        width:150px;
        margin-bottom:2%;
        font-size:110%;
        position: relative;
        left: 77%;
        bottom:25%;
        
    }

    td{ 
        font-size:130%;
        position:relative;
    }
    .enlace { 
        color: white;
        font-size:150%;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        margin-left:1%;
    }


</style>

<head>
    <title> Inserción de datos </title>
</head>
<body>
    <p><a class="enlace" href ="listado_autores.php">Volver al listado de autores</a><a class="enlace" href ="alex_web.php">Cerrar sesión</a></p>
    <h1>FORMULARIO DE ACTUALIZACIÓN DE DATOS DE UN AUTOR</h1>
    <?php

	/**

 	* Función que actualiza los datos de la BD

	 */


        $id = $_GET['id'];

        $resultado = mysqli_query($conn, "SELECT * FROM autores WHERE autor_ID=$id");

        $registro = mysqli_fetch_array($resultado)


    ?>
    <form method="post" action="actualizacion_autores_completa.php?id=<?php echo $id?>">
    <table border="1">
        <tr>
            <td>Nombre</td><td><input type="text" name="nombre" value="<?php echo $registro['nombre']; ?>" /></td>
        </tr>
        <tr>
            <td>Apellido1</td><td><input type="text" name="apellido1" value="<?php echo $registro['apellido1']; ?>"/></td>
        </tr>
        <tr>
            <td>Apellido2</td><td><input type="text" name="apellido2" value="<?php echo $registro['apellido2']; ?>"/></td>
        </tr>

    </table>
        
    <input type="submit" value="Actualizar" class="button"/></td>

    </form>
</body>
</html>