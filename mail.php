<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'webroot/PHPMailer/Exception.php';
require 'webroot/PHPMailer/PHPMailer.php';
require 'webroot/PHPMailer/SMTP.php';

// key google recaptcha obtenir amb el seu correu!
$secretKey = "6LcEyT8UAAAAANAMhFfstbXf-7f0wAjA-iYRewV0";
$responseKey = $_POST['g-recaptcha-response'];
$userIp = $_SERVER['REMOTE_ADDR'];
$url =  "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIp";
$response = file_get_contents($url);
$response = json_decode($response);
if ($response->success) :
    // send mail
    // camps per omplir el correu
    $nom_client = $_POST['nombre'];
    $email = $_POST['email'];
    $altBody = $_POST['empresa'];
    $asunto = $_POST['mensaje'];
    $msg = "Teléfono: ".$_POST['tel']."<br/> Mensaje: ".$_POST['mensaje'];
    // config host
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'mail.infocamconsulting.com';
    $mail->Port = 25;
    $mail->SMTPAuth = true;
    $mail->Username = 'web@infocamconsulting.com';
    $mail->Password = '52eBuMES';
    $mail->isHTML(true);
    $mail->setFrom($email, $nom_client);
    $mail->addAddress('infocamconsulting@gmail.com', 'Infocam');
    $mail->Subject = $asunto;
    $mail->msgHTML($msg);
    if (!$mail->send()) :
        echo "Mailer Error: " . $mail->ErrorInfo;
    else :
        header('Location: index.html');
        exit;
    endif;
else :
    header('Location: index.html');
endif;
