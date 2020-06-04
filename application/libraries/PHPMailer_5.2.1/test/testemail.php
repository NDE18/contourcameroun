<?php
/**
* Simple example script using PHPMailer with exceptions enabled
* @package phpmailer
* @version $Id$
*/

require '../class.phpmailer.php';

try {
	/*$mail = new PHPMailer(true); //New instance, with exceptions enabled

	$body             = file_get_contents('contents.html');
	$body             = preg_replace('/\\\\/','', $body); //Strip backslashes

	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 25;                    // set the SMTP server port
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->Username   = "lemathalist@gmail.com";     // SMTP server username
	$mail->Password   = "ngologmosophie";            // SMTP server password

	$mail->IsSendmail();  // tell the class to use Sendmail

	$mail->AddReplyTo("name@domain.com","First Last");

	$mail->From       = "lemathalist@gmail.com";
	$mail->FromName   = "First Last";

	$to = "lemathalist@gmail.com";

	$mail->AddAddress($to);

	$mail->Subject  = "First PHPMailer Message";

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML($body);

	$mail->IsHTML(true); // send as HTML

	$mail->Send();
	echo 'Message has been sent.';
	define('MAIL_USER', "unreg2018@gmail.com");
	define('MAIL_USER_NAME', "UNREGISTRATION");
//	define('MAIL_USER', "concours.ensai@univ-ndere.cm");
	define('MAIL_PWD', "Unregistration_2018*");
	define('MAIL_PORT', 465);
	define('MAIL_SECURE', "ssl");
	define('MAIL_HOST', "smtp.gmail.com");
	*/
	$from = 'lemanthalist@gmail.com';
	$from_name = 'Your name';
	$to = 'lemanthalist@gmail.com';
	$toname = 'Receiver Name';
	$subject = 'Subject for email';
	$msg = 'The email message, can contains HTML tags';

	$mail             = new PHPMailer();
	$mail->IsSMTP();                                // telling the class to use SMTP
	$mail->Host       = "smtp.gmail.com";           // SMTP server
	$mail->SMTPAuth   = true;                       // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                      // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";           // sets GMAIL as the SMTP server
	$mail->Port       = 465;                        // set the SMTP port for the GMAIL server
	$mail->Username   = 'lemanthalist@gmail.com';           // your GMAIL account
	$mail->Password   = 'ngologmosophie';                 // GMAIL password

	$mail->SetFrom($from, $from_name);
	$mail->AddReplyTo($from, $from_name);
	$mail->Subject = $subject;
	$mail->MsgHTML($msg);                 // to send with HTML tags

	$mail->AddAddress($to, $toname);


	if(!$mail->Send()) {
	  echo 'Mailer Error: '. $mail->ErrorInfo;
	} else {
	  echo 'Message sent!';
	}
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}
?>