<?php

    $correoSMTP = "infouser@coloniaenhurlingclub.com";
    $password = "ABlMazs5Ztm4M2x";
    $correoDestino = "xavisosa@gmail.com";
    $nombre = "Xavier Sosa";

    $cuerpo = "El usuario se creo correctamante, chequea tu casilla de correo, 
            para validar tu nuevo usuario. Hace click en el siguiente link.";

    use PHPMailer\PHPMailer\PHPMailer;
    require '../vendor/autoload.php';


    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'mx1.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = $correoSMTP;
    $mail->Password = $password;
    $mail->setFrom($correoSMTP, 'Colonia en HC');
    $mail->addReplyTo($correoSMTP, 'Colonia en HC');
    $mail->addAddress($correoDestino, $nombre);
    $mail->Subject = 'Registro de Nuevo Usuario Colonia en Hurling Club';
    $mail->msgHTML(file_get_contents('message.html'), __DIR__);
    $mail->Body = $cuerpo;
    $mail->CharSet = 'UTF-8';
    //$mail->addAttachment('test.txt');
    if (!$mail->send()) {
        echo 'Correo con Error: ' . $mail->ErrorInfo;
        header("refresh:10,url=../index.php");
    } else {
        echo 'El usuario se creo correctamante. Mail enviado.';
        header("refresh:10,url=../index.php");
    }

?>