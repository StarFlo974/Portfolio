<?php
session_start();

// Activer l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Récupérer les données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// Activer le débogage
$debug = true;
try {
  $mail = new PHPMailer(true);

  if ($debug) {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  }

  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->Username = 'starnorf.pro@gmail.com';
  $mail->Password = 'sgax wotm dukv vhbi';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

  $mail->SMTPOptions = array(
    'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
    )
  );

  $mail->setFrom($email, $name);
  $mail->addAddress('starnorf.pro@gmail.com', 'Portfolio');

  $mail->CharSet = 'UTF-8';
  $mail->Encoding = 'base64';

  $mail->isHTML(true);
  $bodyParagraphs = ["Nom: {$name}", "Email: {$email}", "Message:", $message];
  $body = join('<br>', $bodyParagraphs);
  $mail->Subject = $subject;
  $mail->Body = $body;
  echo $body;

  $mail->send();
  $_SESSION['message'] = 'Votre message a bien été envoyé';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: " . $e->getMessage();
  $_SESSION['message'] = 'Votre message n\'a pas pu être envoyé';
}

header('Location: ../index.php');