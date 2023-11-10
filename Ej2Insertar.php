<?php     

    require 'Conexion.php';

    $conexionBD = new ConectarBD();
    $conexion = $conexionBD->getConexion();  

    $bUser = $_POST["user"];
    $bContra = $_POST["contra"];
    $bTfno = $_POST["tfno"];

    //En programación orientada a objetos, los fallos en la ejecución son excepciones que generan un objeto de tipo Exception.
    try {

        //$sql = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE NOMBREARTÍCULO = ?";
        $sql = "INSERT INTO USUARIOS(USUARIO, CONTRA, TFNO) VALUES (:user, :contra, :tfno)";

        //Con la conexion creara un objeto de tipo pdo_statement
        $resultado = $conexion ->prepare($sql); //Con esto por un lado lo ejecutas con otro recorres todos los resultados

        $resultado -> execute(array(":user" =>$bUser, ":contra" => $bContra, ":tfno" => $bTfno));

        $resultado ->closeCursor(); //Para cerrar el cursor

        header("Location:Ej2.php"); 

    } catch(Exception $e) {

        die("Error: " . $e->getMessage()); //Hace el objeto del catch
    }
?>