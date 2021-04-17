<?php	
	function sendOTP($email,$otp)
	{
		include('phpmailer/class.phpmailer.php');
		include('phpmailer/class.smtp.php');
	
		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = 80;
		$mail->Username = "harikrishnanrc@mca.ajce.in";
		$mail->Password = "Ambilyradha7@";
		$mail->Host     = "SMTP HOST";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("harikrishnanrc@mca.ajce.in", "AMIN");
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		if(!$result)
		{
			echo"Mailer Error :".$mail->ErrorInfo;
		}
		else
		{
			return $result;
		}
		
	}
?>