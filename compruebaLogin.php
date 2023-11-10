<!doctype html>
<html>
    <head>
    <meta charset = "utf-8">
    <title>compruebaLogin</title>
    </head>
    <body>
        <?php

            try {

                $base = new PDO("mysql:host=localhost:3406; dbname=PracticaFinalT1", "root", "");

                $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT * FROM USUARIOS WHERE USUARIO = :login AND CONTRA = :password";

                $resultado = $base->prepare($sql);

                //htmlentities es para permitir cualquier uso de elementos de html, pero addslashes dice todo lo contrario, es decir hace que puedas usar todo menos aquello usado en inyeccion de codigo
                $login = htmlentities(addslashes($_POST["login"]));
                $password = htmlentities(addslashes($_POST["password"]));
                
                //Une los datos a la consulta
                $resultado ->bindValue(":login", $login);
                $resultado -> bindValue(":password", $password);

                $resultado -> execute();

                //Con esto compruebas si esta o no registrado con un cero o un uno, cero si no lo esta, es decir no ha aparecido ninguna linea de codigo uno si lo esta
                $numeroRegistro = $resultado ->rowCount();

                if($numeroRegistro!=0) {
                    
                    //Crea la sesion para el usuario todo esto servira para en un futuro limitar quien accede a la informacion y que no puedan entrar a traves de la url
                    session_start();

                    $_SESSION["usuario"] = $_POST["login"]; //Rescata el nombre del user


                    header("Location:PaginaPrincipal.php");

                } else {
                    //Le rediriges a la parte de login
                    header("location:login.php");
                }

            }catch(Exception $e){
                die("Error: " . $e->getMessage());
            }
        ?>
    </body>
</html>