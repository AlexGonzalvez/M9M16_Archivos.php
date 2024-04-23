<?php

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
        background: rgba(137, 242, 228, 0.8);
    }

    h1{
        font-size:230%;
        font-family:"Gill Sans Extrabold", Helvetica, sans-serif;
        text-align: center;
    }

    table {
    width: 70%;
    height:700px;
    border: 1.5px solid black;
    position: relative;
    top: 70px; left: 15%;
    background-color:rgb(204, 255, 204);
    }

    .button{
        height:50px;
        width:120px;
        position: relative;
        left: 85%;
    }


</style>

<head>
    <title> Inserción de datos </title>
</head>
<body>
    <h1>Formulario de actualización de datos de un registro</h1>
    <?php
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
        <tr>
            <td colspan="2"><input type="submit" value="Actualizar" class="button"/></td>
        </tr>