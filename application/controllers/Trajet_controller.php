<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trajet_controller extends MY_Controller {

  public function __construct()
	{
		parent::__construct();
		$this->load->model('trajet_model', 'trajet');
	}

	public function index(){
		//$this->load->view('trajet_user');
		$this->load->view("home/include/header_user");
		$this->load->view("home/trajet/trajet_user");
		$this->load->view("home/include/footer");
	}

	public function nouveau_trajet(){
		//$this->render("home/register/nouveau_voyage", "Accueil");
		$this->load->view("home/include/header_user");
		$this->load->view("home/register/nouveau_voyage");
		$this->load->view("home/include/footer");
	}

	public function validation_nouveau_trajet(){

		$this->load->library('form_validation');
		$this->load->library('session');
		
		$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
		$this->form_validation->set_rules('voiture', 'Votre voiture', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('depart', 'La ville de départ', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('datedepart', 'La date de départ', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('arrive', 'La destination', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('datearrive', 'La date', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('place', 'La date', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('prix', 'La date', 'trim|required|min_length[1]|max_length[255]');
		if($this->form_validation->run()){
			$data = [];

			$data['voiture'] = $this->input->post('voiture');
			$data['depart'] = $this->input->post('depart');
			$data['datedepart'] = $this->input->post('datedepart');
			$data['arrive'] = $this->input->post('arrive');
			$data['datearrive'] = $this->input->post('datearrive');
			$data['place'] = $this->input->post('place');
			$data['prix']= $this->input->post('prix');
			$data['infos'] = $this->input->post('infos');
			$data['pseudo'] = $this->session->userdata('pseudo');

			//$this->load->model(trajet_model);
			$result = $this->trajet->enregistrer_trajet($data);

			/*if($result == TRUE){
				echo json_encode(['result' => 1,'message'=>'L enregistrement du trajet cest deroule avec success.']);
				//redirect(base_url().'trajet_controller/liste_trajet_user');
			}
			else{
				echo json_encode(['result' => 0,'message'=>'L enregistrement du trajet a échoué']);
			}*/

		}
		else{
			//redirect(base_url().'trajet_controller/nouveau_trajet');
			/*$message = $this->form_validation->error_array();
			$this->data['error'] = "désolé mais vous devez obligatoirement enregistrer les informations";*/
			/*$this->load->view("home/include/header_account");
			$this->load->view("home/register/nouveau_voyage");
			$this->load->view("home/include/footer");*/
			/*$errors = validation_errors();
            echo json_encode(['result' => 0,'error'=>$errors]);*/
            $message = $this->form_validation->error_array();
			$this->data['error'] = "désolé mais vous devez obligatoirement enregistrer les informations";
			// echo json_encode(array('etat' =>-1 ,'message'=>$message));
			$this->render("home/register/nouveau_voyage", "Enregistrement ", $this->data);
		}
	}

	function liste_trajet_user(){
		$data = [];

		$data['pseudo'] = $this->session->userdata('pseudo');
		$result['fetch_data'] = $this->trajet->trajet_user($data);
		$this->load->view("home/include/header_user");
		$this->load->view("home/trajet/trajet_user", $result);
		$this->load->view("home/include/footer");
	}

	function trajet_user(){
		$offset=0;
		/*if($offset != 0){
			$offset = ($offset-1) * 5;
		}*/
		$data_trajet = $this->trajet->num_rows_trajet();

		$config["total_rows"] = $data_trajet->num_rows();
		$config["base_url"] = 'trajet_controller/trajet_user';
		$config["use_page_numbers"] = TRUE;
		$config["per_page"] = 5;

		//configuration bootstrap
		$config["full_tag_open"] = "<ul class='pagination pagination-sm' style='position:relative;top:-25px'>";
		$config["full_tag_close"] = "</ul>";
		$config["num_tag_open"] = "<li>";
		$config["num_tag_close"] = "</li>";
		$config["cur_tar_open"] = "<li class='disabled'><li class='active'><a href='#'>";
		$config["cur_tar_close"] = "<span class='sr-only'></span></a></li>";
		$config["next_tag_open"] = "<li>";
		$config["next_tag_close"] = "</li>";
		$config["prev_tag_open"] = "<li>";
		$config["prev_tag_close"] = "</li>";
		$config["first_tag_open"] = "<li>";
		$config["first_tag_close"] = "</li>";
		$config["last_tag_open"] = "<li>";
		$config["last_tag_close"] = "</li>";

		$this->pagination->initialize($config);

		$data["pagination"] = $this->pagination->create_links();
		$data["row"] = $offset;

		$pseudo_user['pseudo'] = $this->session->userdata('pseudo');
		$data['result'] = $this->trajet->trajet_user($pseudo_user, $config['per_page'], $offset);

		$this->load->view("home/include/header_user");
		$this->load->view("home/trajet/trajet_user");
		$this->load->view("home/include/footer");

		//echo json_encode($data);
	}

	function get_trajet(){
		$data['id'] = $this->input->post('id_trajet');
		$result['fetch_data'] = $this->trajet->get_trajet($data);
		//echo json_encode($data);
		$this->load->view("home/include/header_user");
		$this->load->view("home/trajet/modifier_trajet", $result);
		$this->load->view("home/include/footer");
	}

	function modifier_trajet(){
		$this->load->library('form_validation');
		$this->load->library('session');
		
		$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
		$this->form_validation->set_rules('voiture', 'Votre voiture', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('depart', 'La ville de départ', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('datedepart', 'La date de départ', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('arrive', 'La destination', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('datearrive', 'La date', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('place', 'La date', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('prix', 'La date', 'trim|required|min_length[1]|max_length[255]');
		if($this->form_validation->run()){
			$data = [];

			$data['voiture'] = $this->input->post('voiture');
			$data['depart'] = $this->input->post('depart');
			$data['datedepart'] = $this->input->post('datedepart');
			$data['arrive'] = $this->input->post('arrive');
			$data['datearrive'] = $this->input->post('datearrive');
			$data['place'] = $this->input->post('place');
			$data['prix']= $this->input->post('prix');
			$data['infos'] = $this->input->post('infos');
			$data['id'] = $this->input->post('id_trajet');
			$data['pseudo'] = $this->session->userdata('pseudo');

			//$this->load->model(trajet_model);
			$this->trajet->modifier_trajet($data);
			/*$result['fetch_data'] = $this->trajet->trajet_user($data);
			$this->load->view("home/include/header_user");
			$this->load->view("home/trajet/trajet_user", $result);
			$this->load->view("home/include/footer");*/
		}
		else{

			$data['id'] = $this->input->post('id_trajet');
			$result['fetch_data'] = $this->trajet->get_trajet($data);
			//echo json_encode($data);
			$this->load->view("home/include/header_user");
			$this->load->view("home/trajet/modifier_trajet", $result);
			$this->load->view("home/include/footer");
		}
	}

	function supprimer_trajet(){
		$data['id'] = $this->input->post('id_trajet');
		$this->trajet->supprimer_trajet($data);

		redirect(base_url().'trajet_controller/liste_trajet_user');
	}

	/*function form_reservation(){
		$data['id'] = $this->input->post('id_trajet');
		$result['fetch_data'] = $this->trajet->get_trajet($data);
		//echo json_encode($data);
		$this->load->view("home/include/header_user");
		$this->load->view("home/trajet/reservation_trajet", $result);
		$this->load->view("home/include/footer");
	}*/
}