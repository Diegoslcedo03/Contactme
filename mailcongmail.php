<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false){
    
    //Confuguracion inicial del servidor de correos.
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com'; //Se cambia el host a comparacion con el de mailtrap.
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;//Este no lo tiene el de mailtrap porque no era necesario
    $phpmailer->Port = 465;//se cambia tambien el puerto a comparacion con el de mailtrap porque este el el puerto para enciar correos.
    $phpmailer->Username = 'bysalcedo@gmail.com';
    $phpmailer->Password = 'keml omsn brzp pqed';

    //Añadiendo destinatarios

    $phpmailer->setFrom('Contact@empresa.com', 'Mi empresa');
    $phpmailer->addAddress($email, $name);

    //definiendo el contenido de mi EMAIL

    $phpmailer->isHTML($html);                                
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    //Mandar el correo.
    $phpmailer->send();

}

?>