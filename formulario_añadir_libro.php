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
    width: 50%;
    height: 100px;
    border: 1.5px solid black;
    margin-bottom:5%;
    position: relative;
    top: 10%; left: 25%;
    background-color: rgb( 209, 255, 247);
    margin-top:8%;
    }

    .button{
        height:50px;
        width:200px;
        margin-bottom:-7%;
        font-size:120%;
        position: absolute;
        left: 70%;
        bottom:40%;
        
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
    <title> Inserción de usuarios en la BD </title>
</head>
<body>
    <p><a class="enlace" href ="listado_libros.php">Volver al listado de libros</a><a class="enlace" href ="alex_web.php">Cerrar sesión</a></p>
    <h1>FORMULARIO DE INSERCIÓN DE LIBROS EN LA BASE DE DATOS </h1>
    <form method="post" action="insercion_libros.php">
    <table border="1">
        <tr>
            <td>ISBN</td><td><input type="text" name="isbn" /></td>
        </tr>
        <tr>
            <td>Título</td><td><input type="text" name="titulo" /></td>
        </tr>
        <tr>
            <td>Descripción</td><td><input type="text" name="descripcion" /></td>
        </tr>
        <tr>
            <td>Autor ID</td><td><input type="text" name="autor_ID" /></td>
        </tr>


    <input type="submit" value="Confirmar y guardar" class="button"/>
</form>
</body>
</html>
