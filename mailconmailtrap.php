<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false){
    
    //Confuguracion inicial del servidor de correos.
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '2e24ecb3af6365';
    $phpmailer->Password = 'cfd69fe1d7334f';

    //Añadiendo destinatarios

    $phpmailer->setFrom('Contact@empresa.com', 'Mi empresa');
    $phpmailer->addAddress($email, $name);

    //definiendo el contenido de mi EMAIL

    $phpmailer->isHTML($html);                                 //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    //Mandar el correo.
    $phpmailer->send();

}

?>