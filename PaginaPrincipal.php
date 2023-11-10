<!doctype html>
<html>
    <head>
    <meta charset = "utf-8">
    <title>UsuariosRegistrados</title>
    </head>
    <body>
        <?php
        //Filtro solo para quien se ha logueado correctamente
        
        session_start(); //Reaudamos la sesion que ya creamos, y sino la crearia

        if(!isset($_SESSION["usuario"])) {
            header("Location:Login.php"); //Si no guardo nada cuando se registro, te redirige a login
        }
        ?>
        <p><a href = "Cierre.php">Cierra sesion</a></p>

        <h1>Registrado</h1>
        <table border="1">
            <tr>
                <td><a>Menu de posiciones</a></td>
            </tr>
            <tr>
                <td><a href="Ej1.php">Ejercicio1</a></td>
            </tr>
            <tr>
                <td><a href="Ej2.php">Ejercicio2 y 3</a></td>
            </tr>
            <tr>
                <td><a href="NuevaReceta.php">NuevaReceta</a></td>
            </tr>
            <tr>
                <td><a href="ListaRecetas.php">ListaRecetas</a></td>
            </tr>
        </table>
    </body>
</html>