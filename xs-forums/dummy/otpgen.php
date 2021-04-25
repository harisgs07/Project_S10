
<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'auth-recovery/vendor/autoload.php';

$success = "";
$error_message = "";
require_once("database.php");

function sendOTP($email,$otp)
	{
		
	
		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = 587;
		$mail->Username = 'harikrishnanrc@mca.ajce.in';
		$mail->Password = 'ambilyradha';     
		$mail->Host     =  'smtp.gmail.com;';
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



if(!empty($_POST["email"])) {	
	$email = $_POST["email"];
	$result = mysqli_query($con,"SELECT * FROM tbl_reg_users WHERE email='$email'");
	$count  = mysqli_num_rows($result);
		if($count>0) 
		{
			// generate OTP
			$otp = rand(100000,999999);
			// Send OTP
			
			$mail_status = sendOTP($email,$otp);
			echo $error_message;
			if($mail_status == 1) 
			{
				$result = mysqli_query($con,"INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
				$current_id = mysqli_insert_id($con);
				if(!empty($current_id)) 
				{
					$success="Check Your Email For The OTP";
					echo $success;
				}
			}
		} 
		else 
		{
			$error_message = "Email not exists!";
			echo $error_message;
		}
		
		
		
		
		
	
	}
?>	

