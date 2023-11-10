<?php
require 'Conexion.php';

$conexionBD = new ConectarBD();
$conexion = $conexionBD->getConexion();

$sql = "SELECT nombre, tiempo, productos, elaboracion, imagen FROM recetas";
$stmt = $conexion->query($sql);

// Para ver si hay o no resultados
if ($stmt->rowCount() > 0) {
    // Mostrar datos de cada fila en una tabla
    echo '<table border="1">
            <tr>
                <th>Nombre</th>
                <th>Tiempo</th>
                <th>Productos</th>
                <th>Elaboración</th>
                <th>Imagen</th>
            </tr>';

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>
                <td>' . $row["nombre"] . '</td>
                <td>' . $row["tiempo"] . '</td>
                <td>' . $row["productos"] . '</td>
                <td>' . $row["elaboracion"] . '</td>
                <td><img src="' . $row['imagen'] . '"/></td>
            </tr>';
    }

    echo '</table>';
} else {
    echo "0 resultados";
}

// Añadir un enlace de retorno a la página principal
echo '<br/><br/>
    <table border="1">
        <tr>
            <td><a href="PaginaPrincipal.php">Volver</a></td>
        </tr>
    </table>';
?>