<?php
	error_reporting(-1);
	ini_set('display_errors', 'On');
	set_error_handler("var_dump");

	$name = $_POST['form-name'];
	$email = $_POST['form-email'];
	$message = $_POST['form-message'];

	$mail_to = 'thulionoslen_@hotmail.com';
	$subject = 'Via CHIS - mensagem de $name';

	$body_message = 'From: ' . $name . "\n";
	$body_message .= 'E-mail: ' . $email . "\n";
	$body_message .= 'Message: ' . $message;

	$headers = 'From: ' . $email . "\r\n";
	$headers .= 'Reply-To: ' . $email . "\r\n";
	$headers .= 'X-Mailer: PHP/' . PHP_VERSION;

	$mail_status = mail($mail_to, $subject, $body_message, $headers);

	if ($mail_status) { ?>
		<script language="javascript" type="text/javascript">
			alert('ACCEPTED');
			window.location = 'membros.html';
		</script>
	<?php
	}
	else { ?>
		<script language="javascript" type="text/javascript">
			alert('FAILED');
			window.location = 'membros.html';
		</script>
	<?php
	}
?>