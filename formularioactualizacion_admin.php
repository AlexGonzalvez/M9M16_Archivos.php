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
    <p><a class="enlace" href ="listado_admin.php">Volver al listado</a><a class="enlace" href ="alex_web.php">Cerrar sesión</a></p>
    <h1>FORMULARIO DE ACTUALIZACIÓN DE DATOS DE UN REGISTRO</h1>
    <?php

	/**

 	* Función que actualiza los datos de la BD

	 */


        $id = $_GET['id'];

        $resultado = mysqli_query($conn, "SELECT * FROM dades WHERE id=$id");

        $registro = mysqli_fetch_array($resultado)


    ?>
    <form method="post" action="actualizacion_completa.php?id=<?php echo $id ?>">
    <table border="1">
        <tr>
            <td>Nombre</td><td><input type="text" name="nom" value="<?php echo $registro['nom']; ?>" /></td>
        </tr>
        <tr>
            <td>Primer Apellido</td><td><input type="text" name="cognom1" value="<?php echo $registro['cognom1']; ?>"/></td>
        </tr>
        <tr>
            <td>Segundo Apellido</td><td><input type="text" name="cognom2" value="<?php echo $registro['cognom2']; ?>"/></td>
        </tr>
        <tr>
            <td>Dirección</td><td><textarea name="adreca"><?php echo $registro['adreca']; ?></textarea></td>
        </tr>
        <tr>
            <td>Codigo Postal</td><td><input type="text" name="cp" value="<?php echo $registro['cp']; ?>" /></td>
        </tr>
        <tr>
            <td>Ciudad</td><td><input type="text" name="ciutat" value="<?php echo $registro['ciutat']; ?>" /></td>
        </tr>
        <tr>
            <td>Pais</td><td><input type="text" name="pais" value="<?php echo $registro['pais']; ?>" /></td>
        </tr>
        <tr>
            <td>Telefono</td><td><input type="text" name="telefon" value="<?php echo $registro['telefon']; ?>"/></td>
        </tr>
        <tr>
            <td>Fecha de Nacimiento</td><td><input type="text" name="datanaixement" value="<?php echo $registro['datanaixement']; ?>"/></td>
        </tr>
    </table>
        
    <input type="submit" value="Actualizar" class="button"/></td>

    </form>
</body>
</html>