<?php
session_start();

if(!isset($_SESSION["usuario"])) {
    header("Location:Login.php"); 
}

require 'Conexion.php';

$conexionBD = new ConectarBD();
$conexion = $conexionBD->getConexion();

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
echo '
<table border="1">
    <tr>
        <td><a href="PaginaPrincipal.php">Volver</a></td>
    </tr>
</table>';
?>