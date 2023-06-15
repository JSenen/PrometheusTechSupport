<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../resources/phpmailer/Exception.php';
require '../resources/phpmailer/PHPMailer.php';
require '../resources/phpmailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gati.zon.barcelona@gmail.com';         //SMTP username
    $mail->Password   = 'gndiiefppltqqqza';                          //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('gati.zon.barcelona@gmail.com', 'GATI Barcelona PRUEBAS');
    $mail->addAddress('b-cmd-barcelona-gati@guardiacivil.org', 'GATI Prueba envio PROMETHEUS');     //Add a recipient
    $mail->addReplyTo('jsenen@guardiacivil.es', 'Prueba REENVIO PROMETHEUS MAIL');
    $mail->addCC('jsenen@guardiacivil.es');
    $mail->addBCC('jsenen@guardiacivil.es');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Prueba de envio mail desde Prometheus';
    $mail->Body    = 'Cuerpo del mensaje de prueba  HTML <b>RECIBIDO!</b>';
    $mail->AltBody = 'Cuerpo del mensaje de prueba non-HTML';

    $mail->send();
    echo 'Mensaje enviado';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}