<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome_model extends CI_Model
{

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function existe($login, $pass)
	{
		$query= $this->db->query("SELECT * FROM users WHERE etat=1 AND login = ? AND password = ?", array($login, $pass));
		return $query;
	}
}
