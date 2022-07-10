<?php

// server
	$dbhost ="localhost";

	$dbuser ="datawal1_mol";
	$dbpass ="datawal1_mol";
	$dbname ="datawal1_mol";
	

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}



	$website_email = "admin@datawalsync.org";
	$website_name = "datawalsync";
	$website ="https://datawalsync.org";
	$key = "https://datawalsync.org"; 
	
	
	$cap_website_email = ucwords($website_email);
	$cap_website = ucwords($website_name);
	$default_mail_head = "datawalsync";
	$info_head = "admin";
	$no_reply = "noreply@datawalsync.org";
?>	