<?php
    require 'Conexion.php';

    $conexionBD = new ConectarBD();
    $conexion = $conexionBD->getConexion();

    $nombre = $_POST['nombre'];
    $tiempo = $_POST['tiempo'];
    $productos = $_POST['prod'];
    $elaboracion = $_POST['elab'];

    $nombre_archivo = $_FILES['img']['name'];
    $tipo_archivo = $_FILES['img']['type'];
    $tamano_archivo = $_FILES['img']['size'];
    $ruta_archivo = 'imagenes/' . $nombre_archivo;
    $directorio_subida = 'uploads/';

    // Verificar si el directorio de subida existe
    if (!is_dir($directorio_subida)) {
        mkdir($directorio_subida, 0777, true);
    }

    // Validar el tipo y tamaño del archivo
    $tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];
    $tamano_maximo = 1048576; // 1 MB

    if (!in_array($tipo_archivo, $tipos_permitidos)) {
        echo "Error: Tipo de archivo no permitido.";
        exit;
    }

    if ($tamano_archivo > $tamano_maximo) {
        echo "Error: El tamaño del archivo excede el límite permitido.";
        exit;
    }

    // Mueve la imagen al directorio de subidas
    if (!move_uploaded_file($_FILES['img']['tmp_name'], $ruta_archivo)) {
        echo "Error al subir el archivo.";
        exit;
    }

    // Consulta para insertar la receta
    $sql = "INSERT INTO recetas (nombre, tiempo, productos, elaboracion, imagen) VALUES ('$nombre', '$tiempo', '$productos', '$elaboracion', '$ruta_archivo')";

    if ($conexion->query($sql) === TRUE && (int)$_SESSION["admin"] === 1) {
        echo "Receta guardada correctamente";
    } else {
        echo "Error al guardar la receta: " . $conexion-> $error;
    }

    header("Location: NuevaReceta.php"); 
?>