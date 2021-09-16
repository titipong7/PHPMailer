<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "mail.kon.in.th";
$mail->SMTPAuth = true;
$mail->CharSet = "utf-8";
$mail->ContentType = 'text/html';
$mail->Encoding = 'base64';
$mail->Username = 'ฐิติพงศ์@คน.ไทย';
$mail->Password = 'McyPZ-1_Nf_9';
$mail->SMTPSecure = "tls"; 
$mail->Port = 587; // TCP port to connect to
$mail->setFrom('ฐิติพงศ์@คน.ไทย');
$mail->addAddress('t.pakinsri@gmail.com');
$mail->addAddress('ติดต่อ@คน.ไทย');


$mail->Subject = '1648Here is the subject'; 
$mail->Body    = 'This is the body.';
 
if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>