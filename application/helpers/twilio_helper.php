<?php
	defined('BASEPATH') or exit('No direct script access allowed');

<<<<<<< HEAD
	function sendSmS($from,$to,$message)
	{
		$this->load->library('twilio');
=======
	
	function sendSmS($from,$to,$message)
	{
>>>>>>> 8e43a56053d686bfdb252d66097b32bd22a20f6c
		$response = $this->twilio->sms($from, $to, $message);


		if($response->IsError)
			echo 'Error: ' . $response->ErrorMessage;
<<<<<<< HEAD
		else
			echo 'Sent message to ' . $to;
=======
		//else
			//echo 'Sent message to ' . $to;
>>>>>>> 8e43a56053d686bfdb252d66097b32bd22a20f6c
	}
?>
