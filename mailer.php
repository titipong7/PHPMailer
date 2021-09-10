<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->isSMTP();
//## $mail->Host = "mail.kon.in.th";
$mail->SMTPAuth = true;
$mail->CharSet = "utf-8";
$mail->ContentType = 'text/html';
$mail->Encoding = 'base64';
// $mail->Username = 'ฐิติพงศ์@คน.ไทย';
//## $mail->Username = 'titipong@kon.in.th';
//## $mail->Password = 'McyPZ-1_Nf_9';
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS also accepted
$mail->SMTPSecure = "tls"; // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS also accepted
//## $mail->Port = 587; // TCP port to connect to
$mail->setFrom('ติดต่อ@คน.ไทย');
// $mail->addAddress('contact@kon.in.th');
//  $mail->addAddress('ติดต่อ@คน.ไทย');


$mail->addAddress('t.pakinsri@gmail.com');
// $mail->addAddress('titipong@xn--42c6b.xn--o3cw4h');
$mail->addAddress('ฐิติพงศ์@คน.ไทย');
$mail->addAddress('ฐิติพงศ์@xn--42c6b.xn--o3cw4h');


$mail->Subject = '1648Here is the subject'; 
$mail->Body    = 'This is the body.';
 
if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

// $mail->setFrom(mb_encode_mimeheader('ฐิติพงศ์@คน.ไทย'));
//$mail->setFrom(base64_encode("ฐิติพงศ์").'@xn--42c6b.xn--o3cw4h');
// $address = iconv('ISO-8859-1', 'ASCII//TRANSLIT', 'ฐิติพงศ์@คน.ไทย');
//$mail->setFrom($address);
// echo base64_encode("ฐิติพงศ์");
// exit;
//$mail->setFrom('ฐิติพงศ์@คน.ไทย');



// $mail->addAddress('t.pakinsri@gmail.com');
// $mail->addAddress('titipong@xn--42c6b.xn--o3cw4h');

// $mail->Subject = '1646Here is the subject';
// $mail->Body    = 'This is the body.';
 
// if($mail->send()){
//     echo 'Message has been sent';
// }else{
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// }

// $mail->isSMTP(); // Send using SMTP
// $mail->Host = 'mail.thnic.co.th'; // Set the SMTP server to send through
// $mail->SMTPAuth = true; // Enable SMTP authentication
// $mail->Username = 'ข้อมูล@ไว้อาลัย.ไทย'; // SMTP username
// $mail->Password = '!zzzzzzzz'; // SMTP password
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS also accepted
// $mail->Port = 587; // TCP port to connect to
// //Recipients
// $mail->setFrom('ข้อมูล@ไว้อาลัย.ไทย');
// $mail->addAddress($email);
// $mail->addReplyTo('ข้อมูล@ไว้อาลัย.ไทย');
// $mail->addBCC('ข้อมูล@ไว้อาลัย.ไทย');

?>
