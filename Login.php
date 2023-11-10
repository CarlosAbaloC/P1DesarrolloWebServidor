<!doctype html>
<html>
    <head>
    <meta charset = "utf-8">
    <title>Login</title>
    <style>
        h1 {
            text-align:center;
        }
        table {
            width:20%;
            background-color: #FFC;
            border: 2px dotted #F00;
            margin: auto;
        }
        .izq{
            text-align: right;
        }
        .der {
            text-align: left;
        }
        td{
            text-align: center;
            padding: 10px;
        }
    </style>
    </head>
    <body>
        <h1>Introduce tus datos</h1>

        <form action = "compruebaLogin.php" method = "post">
        <table>
            <tr><td class= "izq">Usuario: </td><td class ="der"><input type = "text" name ="login"></td></tr>
            <tr><td class = "izq">Contraseña: </td><td class = "der"><input type = "password" name ="password"></td></tr>
            <tr><td colspan = "2"><input type = "submit" name = "enviar" value = "Login"></td></tr>
        </table>
        </form>
    </body>
</html>