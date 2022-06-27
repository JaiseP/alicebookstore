<?php

$receipent = $_POST['receipent'];
$subject = $_POST['subject'];
$body = $_POST['body'];

require_once "../../classes/phpmailer/PHPMailer.php";
require_once "../../classes/phpmailer/SMTP.php";
require_once "../../classes/phpmailer/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



function send_email($subject, $receipent, $body) {

	// Create instance of phpmailer
		$mail = new PHPMailer();

	// Set mailer to use SMTP
		$mail-> isSMTP();

	// Define SMTP Host
		$mail-> Host = "smtp.gmail.com";

	// Enable SMTP Authentication
		$mail-> SMTPAuth = "true";

	// Set type of encryption (ssl/tls)
		$mail-> SMTPSecure = "tls";

	// Set port to connect smtp
		$mail-> Port = "587";

	// Set gmail username
		$mail-> Username = "mailer.alicebookstore@gmail.com"; 

	// Set gmail password
		$mail-> Password = "Qwerty@12345";

	// Set email subject
		$mail-> Subject = $subject;

	// Set sender email
		$mail->setFrom("mailer.alicebookstore@gmail.com");

	// Enable HTML
		$mail->isHTML(true);

	// Email body
		$mail->Body = $body;

	// Add recipient
		$mail->addAddress($receipent);

	// Finally send email
		$mail->Send();

	// Closing smtp connection
		$mail->smtpClose();

		return true;
	}


    if(send_email($subject, $receipent, $body)) {
		echo json_encode(["status" => "success"]);
	}

        
?>