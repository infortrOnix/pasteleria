<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    h2{
    font-size:80px ;
    color: #fff;
    font-weight: 400px;
    text-align: center;
    padding:40px;
    }
</style>

 <meta http-equiv="refresh" content="2;url=http://www.pastelerianonaluisa.com.ar/index.html">
    
    <title>Registro</title>
</head>
<body>
    
    <?php

    //llamamos al archivo de la conexion con mysql
    include("conectar.php");

    //carga de datos en la BBDD

    
    if(isset($_POST['registrar'])) {

         if(!empty($_POST['nombres']) && !empty($_POST['email'] ))  {     
                $nombre=trim($_POST['nombres']);
                $email=trim($_POST['email']);
                
            //insertamos el registro
                $mysqli -> query("INSERT INTO suscriptor(nombre, email) VALUES ('$nombre','$email')");
            
                if($mysqli){
                    /*echo '<br>';
                    echo "Nuevo registro con ID :".$mysqli -> insert_id;
                    echo '<br>';
                    echo '<br>';
                    echo 'Inscripcion Exitosa!';
                    echo '<br>';*/

                    /* */
                    ?>
    
                    <h2>El Registro se Envió  correctamente</h2>
                    <h2><i class="far fa-smile-wink"></i></h2>
                            <script> 
                        
                                document.body.style.backgroundColor = "#ec952b";
                    
                            </script>
                     <?php

                    /* */

                }else{
                   /* echo '<br>';
                    echo 'ERROR .. no se pudo Guardar';*/
                    echo "Error de conexión : ".$mysqli->connect_error;

                    /* */
                    ?>


                    <h2>El Registro NO se Envió correctamente</h2>
                    <h2><i class="far fa-dizzy"></i></h2>
                    <script> 
                            
                                    document.body.style.backgroundColor = "#b45037";
                        
                                </script>
                    
                    <?php

                    /* */


            exit();
                    echo '<br>';
                }
        }else{
            echo 'Debe completar los campos!';

            /* */
            ?>


            <h2>El Formulario NO se Completo correctamente</h2>
            <h2><i class="far fa-dizzy"></i></h2>
            <script> 
                    
                            document.body.style.backgroundColor = "#b45037";
                
                        </script>
            
            <?php

            /* */

        }
    }
    $mysqli -> close();

    ?>

<script src="https://kit.fontawesome.com/ebf09d68b4.js" crossorigin="anonymous"></script>
</body>
</html>