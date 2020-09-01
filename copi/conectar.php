<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
<!-- Estilos   -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">


</head>
<body>
    

    <div>
        <!--Prueba mysql-->
        <?php
        $hostName='localhost';
        $userName='c1701412';
        $password='fa70nuDOka';
        $dataBase='c1701412_pastel';
        //conectar con MySql
        $mysqli = new mysqli("$hostName","$userName","$password","$dataBase");

        //control del resultado de la conexion

        if($mysqli-> connect_errno){
            echo "Error de conexión : ".$mysqli->connect_error;
            exit();
        }else{
            echo '<br>';
            echo '<br>';
            echo 'Conexion exitosa !!';
            echo '<br>';
            echo '<br>';
            echo '<br>';
        }
       

    ?>
    </div>

</body>
</html>