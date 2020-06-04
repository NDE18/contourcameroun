<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
<<<<<<< HEAD

=======
use Twilio\Rest\Client;
>>>>>>> 8e43a56053d686bfdb252d66097b32bd22a20f6c
class twilio_demo extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->library('twilio');

<<<<<<< HEAD
		$from = '+237690309847';
		$to = '+237690309847';
		$message = 'C est un test pour test l envoie des messages si tu recoit ca c est que j ai reussi...';
		$newnumber=$this->twilio->addNumber(null,$number="+237698292866");
		$response = $this->twilio->sms($from, $to, $message);


=======
		$from = '+237691189547';
		$to = '+12673676385';
		$message1 = 'C est un test pour test l envoie des messages si tu recoit ca c est que j ai reussi...';
		
		$sid = 'AC33ab9a72b4ef6e4ad2587bcd36cdcd47';
		// $sid = $_ENV["TWILIO_ACCOUNT_SID"];
		// $token = $_ENV["TWILIO_AUTH_TOKEN"];
		 $token = '240677c8b51df3ee3b39b913065af833';
		//$newnumber=$this->twilio->addNumber(null,$number="+237698292866");
		//$response = $this->twilio->sms($from, $to, $message);
		$twilio = new Client($sid, $token);
		// $hosted_number_order = $twilio->preview->hostedNumbers->hostedNumberOrders("+237690202247")->fetch();

		// print($hosted_number_order->friendlyName);
		$message = $twilio->messages
                  ->create("+237691189547", // to
                           array(
                               "body" => "This is the ship that made the Kessel Run in fourteen parsecs?",
                               "from" => "+12673676385"
                           )
				  );
		$response = $this->twilio->sms($from, $to, $message1);
		/*$incoming_phone_number = $twilio->incomingPhoneNumbers
                                ->create(array(
                                             "friendlyName" => "B2KTECH",
                                             "phoneNumber" => "+12673676385",
                                             "voiceMethod" => "GET",
                                             "voiceUrl" => "http://demo.twilio.com/docs/voice.xml"
                                         )
                                );*/
>>>>>>> 8e43a56053d686bfdb252d66097b32bd22a20f6c
		if($response->IsError)
			echo 'Error: ' . $response->ErrorMessage;
		else
			echo 'Sent message to ' . $to;
	}

}

/* End of file twilio_demo.php */
