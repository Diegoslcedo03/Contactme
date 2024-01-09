<?php

require("mailcongmail.php");

function validate($name, $email , $subject, $message){
  return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(validate(...$_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);


        $body = "$name <$email> te envia el siguiente mensaje: <br><br>
        $message";

         //Mandar correo
        sendMail($subject, $body, $email, $name, true);

        
        $status = "success";
    }
    else{
        $status = "danger";
    }

}

?>

