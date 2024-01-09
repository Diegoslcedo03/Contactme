<?php
include('servidor.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="Styles/styleIndex.css" type="text/css">

</head>
<body class="Ingresar">
    <?php if ($status == "danger"):?>

        <div class="alert_danger">
        <span>Send Error</span>
        </div>

    <?php endif; ?>

    <?php if ($status == "success"):?>

        <div class="alert_succes">
        <span>Shipment Made Successfully</span>
        </div>

<?php endif; ?>

    <form action="./" method="post" class="form">
        <h1>Contact Me</h1>
        <br>
        <label for="nombre">Name</label>
        <input type="text" name="name" id="nombre">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="affair">Affair</label>
        <input type="text" name="subject" id="affair">
        <br>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>