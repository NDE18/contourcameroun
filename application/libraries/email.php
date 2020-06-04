<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com', // like we use smtp_host for  gmail  smtp.gmail.com
    'smtp_port' => 465,
    'smtp_user' => 'lemanthalist@gmail.com', // change it to yours
    'smtp_pass' => 'ngologmosophie', // change it to yours
    //'crlf' => '\r\n',      //should be "\r\n"
	//'newline' =>'\r\n',   //should be "\r\n"
    'mailtype' => 'html',
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
    );
?>
