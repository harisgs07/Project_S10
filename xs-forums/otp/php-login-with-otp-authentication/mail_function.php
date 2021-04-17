<?php	
	function sendOTP($email,$otp) {
		//require('F:\xampp\htdocs\xs-forums\otp\php-login-with-otp-authentication\src\PHPMailer.php');
		require('F:\xampp\php\pear\PEAR');
		require('smtp.php');
	
		$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'harikrishnanrc@mca.ajce.in';                 // SMTP username
$mail->Password = 'ambilyradha';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

//Set who the message is to be sent from
$mail->setFrom('harikrishnanrc@mca.ajce.in', 'First Last');
//Set an alternative reply-to address

//Set who the message is to be sent to
$mail->addAddress($email, 'Shehan');
//Set the subject line
$mail->Subject = 'Test Mail';

$mail->Body = 'This is Test Mail';


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
} 
	}
?>