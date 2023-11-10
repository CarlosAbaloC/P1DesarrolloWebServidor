<!doctype html>
<html>
    <head>
    <meta charset = "utf-8">
    <title>Ejercicio2</title>
    <script src= "Ej3.js"></script>

    </head>
    <body>
        <p><a href = "Cierre.php">Cierra sesion</a></p>

        <form action = "Ej2Insertar.php" method = "post" onsubmit="return validarFormulario()">

        <table>
            <tr><td>Usuario: </td><td><input type = "text" name ="user" id = "user"></td></tr>
            <tr><td>Contraseña: </td><td><input type = "text" name ="contra" id = "contra"></td></tr>
            <tr><td>Telefono: </td><td><input type = "text" name ="tfno" id = "tfno"></td></tr>

            <tr><td colspan="2"><input type = "submit" name = "enviado" value = "Crear Usuario"></td></tr>
        </table>
        <br/><br/>
        <?php

        //Filtro solo para quien se ha logueado correctamente
        
        session_start(); //Reaudamos la sesion que ya creamos, y sino la crearia

        if(!isset($_SESSION["usuario"])) {
            header("Location:Login.php"); //Si no guardo nada cuando se registro, te redirige a login
        }


        require 'Conexion.php';

        $conexionBD = new ConectarBD();
        $conexion = $conexionBD->getConexion();
        
        cargarPagina($conexion);
        
            function cargarPagina($conexion) {

                try {
                    $query = "SELECT USUARIO, CONTRA, TFNO FROM usuarios";
                    $statement = $conexion->prepare($query);
                    $statement->execute();
                    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
                    if (count($results) > 0) {
                        echo "<table border='1'>";
                        echo "<tr><th>Usuario</th><th>Contraseña</th><th>Teléfono</th></tr>";
    
                        //Por cada resultado coge los tres datos de la fila
                        foreach ($results as $row) {
                            echo "<tr><td>" . $row['USUARIO'] . "</td><td>" . $row['CONTRA'] . "</td><td>" . $row['TFNO'] . "</td></tr>";
                        }
    
                        echo "</table>";
                    } else {
                        echo "No hay registros para mostrar.";
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }

            }
            
        ?>
        <table border="1">
            <tr>
                <td><a href="PaginaPrincipal.php">Volver</a></td>
            </tr>
        </table>
    </body>
</html>