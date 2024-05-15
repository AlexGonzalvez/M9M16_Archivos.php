<!DOCTYPE html>

<html lang="es">

<style type="text/css" media="screen">
    html{
        background: rgb(255, 254, 224);
        background-image: url("img/imagen_formulario1.jpg");

    }

    h1{
        font-size:270%;
        font-family:"Gill Sans Extrabold", Helvetica, sans-serif;
        text-align: center;
        color: rgb( 252, 255, 209);
        margin-top:3%;
    }

    table {
    width: 70%;
    height:700px;
    border: 1.5px solid black;
    margin-bottom:2%;
    position: relative;
    top: 10%; left: 15%;
    background-color: rgb( 209, 255, 247);
    margin-top:5%;
    }

    .button{
        height:50px;
        width:120px;
        margin-bottom:2%;
        font-size:120%;
        position: relative;
        left: 78%;
        bottom:25%;
        
    }

    td{ 
        font-size:130%;
        position:relative;
    }

    .a{
        color:white;
        position:relative;
        right:300%;
        font-size:120%;
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
    <p><a class="enlace" href ="listado_user.php">Volver al listado</a><a class="enlace" href ="alex_web.php">Cerrar sesión</a></p>
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
    </table>

    <input type="submit" value="Enviar" class="button"/>
</form>
</body>
</html>

