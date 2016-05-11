<?php
//$toEmail = "info@outsoft.com, outsoft.sem@gmail.com, andrey.boiko@outsoft.com";
$toEmail = "andrey.boiko@outsoft.com";
$msg = $_POST["content"].' '. $_SERVER['REMOTE_ADDR'];
$mailheaders .= "From: " . $_POST["userName"] . " <" . $_POST["userEmail"] . ">\r\n";

if(mail($toEmail, $_POST["subject"], $msg, $mailheaders)) {
    
}
?>