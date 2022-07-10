<?php
//get data from form  

 $aname = $_POST['aname'];
		$aemail = $_POST['aemail'];
		$aphone = $_POST['aphone'];
		$asubject = $_POST['asubject'];
		$rmessage = $_POST['rmessage'];
$to = "dimemoremore@outlook.com";
$subject= $asubject;
$message= "test running for Phrase";
$txt ="name: $aname \n".
				"email: $aemail \n".
				"phone: $aphone\n".
				"$rmessage \n". 
$headers = "From: noreply@datawalsync.org" . "\r\n" .
"CC: ";
if(!empty($aname) && !empty($aemail) && !empty($aphone) && !empty($asubject) && !empty($rmessage))
// if($aemail!=NULL) &&
{
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:mail.php");
