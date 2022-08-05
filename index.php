<?php

	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

	use PHPMailer\PHPMailer\PHPMailer;

	
	$message = "เรียนเชิญ นำโชค";
	$message .= "รหัสสมาชิก NC2208080001\r\n";
	$message .= "<h1>เข้าอบรม สมาชิก</h1>\r\n";

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	$mail->Port = "587";
	$mail->Username = "chokzass2007@gmail.com";
	$mail->Password = "kuhiagkejrhexpza";
	$mail->Subject = "Subject : 2022";// ชื่อเรื่อง
	$mail->setFrom('chokzass2007@gmail.com');// อีเมล์ผู้ส่ง
	$mail->isHTML(true);
	$mail->Body = $message;//ข้อความ
	$mail->addAddress('chokzass2020@gmail.com');// CC ผู้รับ

	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
//Closing smtp connection
	$mail->smtpClose();
