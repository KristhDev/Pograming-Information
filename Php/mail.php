<?php

if(isset($_POST['send'])){
    if(!empty($_POST['email']) && !empty($_POST['about']) && !empty($_POST['message'])){
        $email=$_POST['email'];
        $about=$_POST['about'];

        $message = 'Mensaje enviado desde tu pagina web "Programing information"' . " \r\n";
        $message .= "Su correo es: " . $email . " \r\n";
        $message .= "Mensaje: " . $_POST['message'] . " \r\n";
        $message .= "Enviado el " . date('d/m/Y', time());

        $header = 'From: kafr9102@gmail.com' . " \r\n";
        $header .= "Reply-To: kafr9102@gmail.com" . " \r\n";
        $header .= "XMailer: PHP/" . phpversion();

        $mail = @mail($email, $about, utf8_decode($message), $header);
    }
}

header('location:../pages/Contacto');

