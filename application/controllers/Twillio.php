<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Twilio\Rest\Client;
 
class Twillio extends CI_Controller {
 
    public function index()
    {
      //  $data = ['phone' => '+12673676385', 'text' => 'Hello, CI'];
       // print_r($this->sendSMS($data));
    }
 
    public function sendSMS() {
          // Your Account SID and Auth Token from twilio.com/console
            $sid = 'PN0bed86e7c45d202f4e8d8181d9ea3ef8';
           // $sid = $_ENV["TWILIO_ACCOUNT_SID"];
           // $token = $_ENV["TWILIO_AUTH_TOKEN"];
            $token = '240677c8b51df3ee3b39b913065af833';
            $client = new Client($sid, $token);
            
            // Use the client to do fun stuff like send text messages!
             return $client->messages->create(
                // the number you'd like to send the message to
                +237690309847,
                array(
                    // A Twilio phone number you purchased at twilio.com/console
                    "from" => "+12673676385",
                    // the body of the text message you'd like to send
                    'body' => "masso message"
                )
            );
    }
}
