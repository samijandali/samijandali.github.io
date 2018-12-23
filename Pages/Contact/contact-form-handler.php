<?php

	if (isset($_POST['submit]'])){
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];

	$mailTo = "photography@samijandali.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);

	header("Location: Contact-Classic.html?mailsend");
	}

	?>