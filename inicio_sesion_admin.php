

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
    color: rgb(255, 254, 224);
    margin-top:3%;
}

table{
    font-size:150%;
    font-family: font-family: "Gill Sans Extrabold", sans-serif; 
    text-align: center;
    color: black;
    margin-top:3%;
    background-color:rgb( 202, 246, 244 );
    margin-left:30%;
    margin-top:10%;
    width:40%;
    height:10%;

}

.button{
    margin-top:4%;
    margin-left:50%;
    width:25%;
    height:25%;
    font-family: font-family: "Gill Sans Extrabold", sans-serif; 
}
.enlace { 
        color: white;
        font-size:150%;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        margin-left:1%;
        margin-top:-10%;
    }
</style>
<p><a class="enlace" href ="alex_web.php">Volver al menú principal</a></p>
<h1>INICIO DE SESIÓN DE ADMINISTRADOR</h1>
    <form method="post" action="seguridad_admin.php">
    <table border="1">
        <tr>
            <td>Nombre de usuario</td><td><input type="text" name="nom" id="nom" /></td>
        </tr>
        <tr>
            <td>Contraseña</td><td><input type="password" name="contraseña" id="contraseña" /></td>
        </tr>
    </table>
    <p class="button"><input type="submit" value="Enviar" class="button"/></p>
    </form>


</html>