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
    <h1>FORMULARIO DE INSERCIÓN DE DATOS</h1>
    <form method="post" action="insercion.php">
    <table border="1">
        <tr>
            <td>Nombre</td><td><input type="text" name="nom" /></td>
        </tr>
        <tr>
            <td>Primer Apellido</td><td><input type="text" name="cognom1" /></td>
        </tr>
        <tr>
            <td>Segundo Apellido</td><td><input type="text" name="cognom2" /></td>
        </tr>
        <tr>
            <td>Dirección</td><td><textarea name="adreca"></textarea></td>
        </tr>
        <tr>
            <td>Codigo Postal</td><td><input type="text" name="cp" /></td>
        </tr>
        <tr>
            <td>Ciudad</td><td><input type="text" name="ciutat" /></td>
        </tr>
        <tr>
            <td>Pais</td><td><input type="text" name="pais" /></td>
        </tr>
        <tr>
            <td>Telefono</td><td><input type="text" name="telefon" /></td>
        </tr>
        <tr>
            <td>Fecha de Nacimiento</td><td><input type="text" name="datanaixement" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Enviar" class="button"/></td>
        </tr>
