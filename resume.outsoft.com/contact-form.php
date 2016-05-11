<?php
//$mailheaders .= "From: " . $_POST["userName"] . " <" . $_POST["userEmail"] . ">\r\n";

date_default_timezone_set('Europe/Kiev');

require 'lib/class.phpmailer.php';
require 'lib/class.smtp.php';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(false);
$mail->Username = "info@outsoft.com"; //логин почты вбить сюда
$mail->Password = "outsoft2016"; //сюда пароль от почты
$mail->SetFrom($_POST["userEmail"], $_POST["userEmail"]);
$mail->Subject = $_POST["subject"];
$mail->Body = $_POST["content"].' '. $_SERVER['REMOTE_ADDR'];
$mail->AddAddress("info@outsoft.com");
$mail->AddAddress("outsoft.sem@gmail.com");
$mail->AddAddress("andrey.boiko@outsoft.com");
$mail->AddAddress("anastasia@outsoft.com");
//$mail->AddAddress("mariia@outsoft.com");
//$mail->AddAddress("alexey@outsoft.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

$message = 'Hi' + .$_POST["userName"]. + '\r\n I\'ve received your request and will be getting back to you soon. In the meantime, why don\'t you get to know Outsoft a little bit more? Find out our company\'s <a href="http://outsoft.com/company/about-us">story</a>), look at our project <a href="http://outsoft.com/portfolio">samples</a> and read amazing articles on our <a href="http://outsoft.com/blog">blog</a>. \r\n Also, you are welcome to follow us on <a href="https://twitter.com/OutsoftCorp">Twitter</a>), <a href="https://www.facebook.com/outsoftcorp/">Facebook</a> or <a href="https://www.linkedin.com/company/outsoft-corp/">Linkedin</a>. \r\n Look forward to speaking to you in no time! \r\n Sincerely, \r\n Maria Mityasova, \r\n Head of Pre-Sales Department at Outsoft';
$subject = "Auto reply Request form";
$leademail = $_POST["userEmail"];
$headers2 = "From: info@outsoft.com \r\n";
$headers2 .= "Content-type:  text/html\r\n";
mail($leademail, $subject, $message, $headers2);
 
?>