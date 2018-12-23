<?php

$whitelist = array ('name', 'email', 'message');

$email_address = 'samirifai18@gmail.com';

$subject = 'New Contact Form Submission';

$errors = array();
$fields = array();

foreach( $whitelist as $key){
	$fields[$key] = $_POST[$key];
}
foreach($fields as $field => $data){
	if(empty($data)){
		$errors[] = 'Please enter your '.$field;
	}
}

$sent = mail($email_address, $subject, $fields['message']);


?>
