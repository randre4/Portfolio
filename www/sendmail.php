<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'randre@gaming.bs'; 
    $mail->Password = 'Raphael05100'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('randre@gaming.bs'); 
    $mail->addAddress('randre@gaming.bs'); 
    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Identité: $name <br>@mail: $email <br>Objet : $subject <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span> Votre message a bien été envoyé ! Je vous réponds au plus vite.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
