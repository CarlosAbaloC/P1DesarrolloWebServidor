<?php
session_start();

if(!isset($_SESSION["usuario"])) {
    header("Location:Login.php"); 
}

require 'Conexion.php';

$conexionBD = new ConectarBD();
$conexion = $conexionBD->getConexion();

try {
    $query = "SELECT NAME, ADDRESS, TELF FROM usuarios";
    $statement = $conexion->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (count($results) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Dirección</th><th>Teléfono</th></tr>";

        foreach ($results as $row) {
            echo "<tr><td>" . $row['NAME'] . "</td><td>" . $row['ADDRESS'] . "</td><td>" . $row['TELF'] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No hay registros para mostrar.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conexionBD->cerrarConexion();
?>