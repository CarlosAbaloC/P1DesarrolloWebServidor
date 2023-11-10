<!doctype html>
<html>
    <head>
    <meta charset = "utf-8">
    <title>Ejercicio2</title>
    <script src= "Ej3.js"></script>
    <?php
        
        session_start(); //Reaudamos la sesion que ya creamos, y sino la crearia

        if(!isset($_SESSION["usuario"])) {
            header("Location:Login.php"); //Si no guardo nada cuando se registro, te redirige a login
        }


    ?>
    </head>
    <body>
        <p><a href = "Cierre.php">Cierra sesion</a></p>

        <form action="AñadirReceta.php" method="post" enctype="multipart/form-data" onsubmit="return validarFormulario()">

        <table>
            <tr><td>Nombre: </td><td><input type="text" name="nombre" id="nombre"></td></tr>
            <tr><td>Tiempo: </td><td><input type="text" name="tiempo" id="tiempo"></td></tr>
            <tr><td>Productos: </td><td><textarea name="prod" id="prod" rows="4" cols="50"></textarea></td></tr>
            <tr><td>Elaboración: </td><td><textarea name="elab" id="elab" rows="4" cols="50"></textarea></td></tr>
            <tr><td>Imagen: </td><td><input type="file" name="img" id="img"></td></tr>
            <tr><td colspan="2"><input type="submit" name="enviado" value="Nueva receta"></td></tr>
        </table>
        <br/><br/>
        <table border="1">
            <tr>
                <td><a href="PaginaPrincipal.php">Volver</a></td>
            </tr>
        </table>
    </body>
</html>