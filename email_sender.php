<?php

require 'src/resources/lib/emailApi/src/Exception.php';
require 'src/resources/lib/emailApi/src/PHPMailer.php';
require 'src/resources/lib/emailApi/src/SMTP.php';

$mail =  new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "clinic.cheronzelle@gmail.com";
$mail->Password   = "cheronzelle123456789";

// $mail->IsHTML(true);
// $mail->AddAddress($_POST['customer_email'], "Customer");
// $mail->SetFrom("clinic.cheronzelle@gmail.com", "Cheronzelle Clinic");
// $mail->Subject = $_POST['email_subject'];

// $mail->MsgHTML($_POST['email_body']); 
// if(!$mail->Send()) {
//   echo "Error while sending Email.";
//   var_dump($mail);
// } else {
//   echo "Email sent successfully";
// }








?>