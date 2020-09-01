<?php
/**
 * @version 1.0
 */

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["telefono"]) || !isset($_POST["correo"]) || !isset($_POST["mensaje"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["correo"];
$mensaje = $_POST["mensaje"];

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "c1701412.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "no-reply@c1701412.ferozo.com";  // Mi cuenta de correo
$smtpClave = "aGXigk@dA@";  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "norbertovaldeon@hotmail.com";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";


// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Desde La Web"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "{$mensajeHtml} <br /><br />Pasteleria La Nona Luisa<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n Contacto desde la Web"; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //


?>

<html>
<head>
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

</head>
<body>

<?php

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    
    ?>
    
    <h2>El Formulario se Envió  correctamente</h2>
    <h2><i class="far fa-smile-wink"></i></h2>
            <script> 
        
                document.body.style.backgroundColor = "#ec952b";
    
            </script>
     <?php
} else {
    
    ?>


<h2>El Formulario NO se Envió correctamente</h2>
<h2><i class="far fa-dizzy"></i></h2>
<script> 
        
                document.body.style.backgroundColor = "#b45037";
    
            </script>

<?php
}

?>
<script src="https://kit.fontawesome.com/ebf09d68b4.js" crossorigin="anonymous"></script>
</body>
</html>