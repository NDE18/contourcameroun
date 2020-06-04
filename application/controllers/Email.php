<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		require_once FCPATH."application/libraries/PHPMailer_5.2.1/class.phpmailer.php";
		//require '../class.phpmailer.php';
		//$this->load->library('PHPMailer_5.2.1/class.phpmailer.php');
	}

	public function index()
	{
		
		
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

	}
	
	 
}
