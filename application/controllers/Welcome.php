<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

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
		protected_session(['Annonces', '']);
	}

	public function index()
	{
		$this->load->library("form_validation");
		$this->load->helper("security");

		$this->form_validation->set_rules("login", "log-in", "required|trim|min_length[1]|max_length[10]|xss_clean|callback_verif", array("verif"=>"erreur de login ou mot de passe!"));
		$this->form_validation->set_rules("pass", "password", "required|trim|min_length[1]|max_length[10]|xss_clean");

		if($this->form_validation->run())
		{
			redirect('Annonces');
		}
		else
		{
			$this->load->view("connect");
		}
	}

	public function verif($t){
		$this->load->model("Welcome_model", "wel");
		if($this->wel->existe($this->input->post("login"), $this->input->post("pass"))->num_rows()==1){
			$donnees=$this->wel->existe($this->input->post("login"), $this->input->post("pass"))->result_array();
			foreach ($donnees as $donnee) {
				set_session_data([
					"connect"=>true,
					"grade"=>ADMIN,
					"nom"=> $donnee['nom'],
					"prenom"=>$donnee['prenom'] ,
					"id"=> $donnee['id'],
					"photo"=> $donnee['photo'],
					"service"=> $donnee['service'],
					"fonction"=> $donnee['fonction']
				]);
				return true;
			}
		}
		return false;
	}

	/*function unicity($param){
		$params=explode(".", $param);
		$this->load->model("Welcome_model", "wel");
		return $this->wel->repetition($params[0],$params[1],$params[2])<=3;
	}*/
}
