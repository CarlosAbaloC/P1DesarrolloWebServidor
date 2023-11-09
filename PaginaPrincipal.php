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
                <td><a href="Ej1.php">UsuariosRegistrados2</a></td>
            </tr>
        </table>
        <?php

            echo "<h2>Hola: " . $_SESSION["usuario"] . "</h2><br><br>";

        ?>
    </body>
</html>