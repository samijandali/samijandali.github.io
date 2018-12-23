<?php

	if (isset($_POST['submit]'])){

		require('phpmailer/PHPMailerAutoload.php');
		$mail = new PHPMailer();

		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host='smtp.gmail.com';

		$mail->Username = 'photography.contactform.sami@gmail.com';
		$mail->Password = 'S619v$L#xDPi';

		$mail->setFrom($_POST['email'], $_POST['name']);
		$mail->addAddress('photography@samijandali.com');
		$mail->addReplyTo($_POST['email'],$_POST['name']);

		$mail->isHTML(true);
		$mail->Subject = 'Form Submission '.$_POST['subject'];
		$mail->Body= '<h1 align = center> Name: '.$_POST['name'].'<br>Eail: '.$_POST['email'].'<br> Message: '.$_POST['message'].'</h1>';
		if(!$mail->send()){
			$result = "something went wrong";
		}else{
			$result = 
		}
	}

	?>
