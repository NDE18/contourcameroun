<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	require_once FCPATH."application/libraries/PHPMailer_5.2.1/class.phpmailer.php";

	function sendUserMail($senderAdresse,$receiverAdressse,$message,$reveiverName)
	{
		//$from = 'lemanthalist@gmail.com';
		$statut=[];
		$from_name = 'B2KTECH';
		//$to = 'lemanthalist@gmail.com';
		//$toname = 'Receiver Name';
		$subject = 'Code de verification';
		//$msg = 'The email message, can contains HTML tags';

		$mail             = new PHPMailer();
		$mail->IsSMTP();                                // telling the class to use SMTP
		$mail->Host       = "smtp.gmail.com";           // SMTP server
		$mail->SMTPAuth   = true;                       // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                      // sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";           // sets GMAIL as the SMTP server
		$mail->Port       = 465;                        // set the SMTP port for the GMAIL server
		$mail->Username   = 'lemanthalist@gmail.com';           // your GMAIL account
		$mail->Password   = 'ngologmosophie';                 // GMAIL password

		$mail->SetFrom($senderAdresse, $from_name);
		$mail->AddReplyTo($senderAdresse, $from_name);
		$mail->Subject = $subject;
		$mail->MsgHTML($message);                 // to send with HTML tags

		$mail->AddAddress($receiverAdressse, $reveiverName);


		if(!$mail->Send()) {
		 	$statut  = array('etat' => 0 ,'message'=> 'Mailer Error: '. $mail->ErrorInfo);
		}else{
			$statut = array('etat' => 1 ,'message'=> 'Message sent!');
		}

		return $statut;
	}
?>
