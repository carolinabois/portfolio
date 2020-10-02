<?php 
include_once ("PHPMailer/src/PHPMailer.php");
include_once ("PHPMailer/src/SMTP.php");
$pg = "contacto" ;

if($_POST){ /* es postback */
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];

    if($nombre != "" && $correo != ""){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "mail.dominio.com"; // SMTP a utilizar CAMBIAR
        $mail->Username = "info@dominio.com.ar"; // Correo completo a utilizar CAMBIAR
        $mail->Password = "aqui va la clave de tu correo";
        $mail->Port = 25;
        $mail->From = "info@dominio.com.ar"; //Desde la cuenta donde enviamos
        $mail->FromName = "Tu nombre a mostrar";
        $mail->IsHTML(true);
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

        //Destinatarios
        $mail->addAddress($correo);
        $mail->addBCC("otrocorreo@gmail.com"); //Copia oculta
        $mail->Subject = utf8_decode("Contacto página Web");
        $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
        /* if(!$mail->Send()){   //(COMENTAR PARA Q NO DE ERROR)
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }*/
        $mail->ClearAllRecipients(); //Borra los destinatarios

        //Envía ahora un correo a nosotros con los datos de la persona
        $mail->addAddress("info@dominio.com.ar");
        $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
        $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";
       
        //if($mail->Send()){ /* Si fue enviado correctamente redirecciona */ //(COMENTAR PARA Q NO DE ERROR)
            header('Location: confirmacion-envio.php');
        //} else {  //(COMENTAR PARA Q NO DE ERROR)
          //  $msg = "Error al enviar el correo, intente nuevamente mas tarde."; // (COMENTAR PARA Q NO DE ERROR)
        //}    
    } else {
        $msg = "Complete todos los campos";
    }

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="contacto">
    <header>
        <div class="container">
            <?php include_once ("menu.php") ; ?>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 col-sm-5 mt-4">
                    <p>Para más detalles sobre mi
                        trabajo podés ver mi Linkedin,
                        descargar mi CV o mandarme
                        un mensaje.</p>
                    <div class="row">
                        <div class="col-6 text-center my-4 my-sm-4">
                            <a href="files/Carolina Bois CV 2020.pdf" class="btn">Descarga mi CV</a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6 offset-sm-1 mt-4">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control shadow"
                                placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                            <input type="email" id="txtCorreo" name="txtCorreo" class="form-control shadow"
                                placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="5" class="form-control shadow"
                                placeholder="Comentarios"></textarea>
                        </div>
                        <div class="text-right mt-4">
                            <button type="submit" class="btn">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include_once ("footer.php") ; ?>
</body>

</html>