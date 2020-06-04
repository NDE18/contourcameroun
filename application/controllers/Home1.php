<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  public function __construct()
	{
		parent::__construct();
		$this->load->model('Registration_model','registration');
	}
	public function index()
	{
		$this->render('home/index');
		
	}
	public function register1(){
		$this->render('home/register/forms');
	}
	public function register(){

		if(!empty($_POST)){
			$etape1 =[];
			$etape2 =[];
			$etape3 =[];
			//$mention =[];
			if($_POST['etape']==1){

				
				
				$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
				$this->form_validation->set_rules('nom', 'Votre nom', 'trim|required|min_length[1]|max_length[255]');
				$this->form_validation->set_rules('prenom', 'Votre prenom', 'trim|required|min_length[1]|max_length[10]');
				$this->form_validation->set_rules('datenaissance', 'Votre date de naissance', 'trim|required|min_length[1]|max_length[255]');
				$this->form_validation->set_rules('speudo', 'Votre speudo', 'trim|required|min_length[1]|max_length[10]');
				$this->form_validation->set_rules('email', 'Votre email', 'trim|required|min_length[1]|max_length[100]');
				$this->form_validation->set_rules("mdp", "Votre mot de passe", "trim|required|min_length[1]|max_length[10]");
				$this->form_validation->set_rules("cmdp", "Votre confirme votre de passe ", "trim|required|min_length[1]|max_length[10]");
				
				if ($this->form_validation->run() == FALSE)
				{
					
				   $this->form_validation->error_array();
				   $this->data['error'] = "désolé mais vous devez obligatoirement enregistrer les informations";
				   $this->render("home/register/forms", "Enregistrement ", $this->data);
				   
				}
				else
				{
					
					//echo "ici";
					// var_dump($_FILES); die;
					//INITIALISATION DES DONNEES A INSERER
					
					$data = [];
					$data['nom'] = $this->input->post('nom');
					$data['prenom'] = $this->input->post('prenom');
					$data['datenaissance'] = $this->input->post('datenaissance');                  
					$data['speudo'] = $this->input->post('speudo');
					$data['email'] = $this->input->post('email');
					$data['mdp']=$this->input->post('mdp');
					$data['cmdp']=$this->input->post('cmdp');
					$data['phone']=$this->input->post('phone');
					$data['etape']=$this->input->post('etape');
					
					$etape1=$this->registration->register($data);
				}
			}
			elseif($_POST['etape']==2){
				// var_dump($_POST);
				// die;

				$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
				$this->form_validation->set_rules('coderecuparmail', 'code recu par email', 'trim|required|min_length[3]|max_length[255]');
				// $this->form_validation->set_rules('cycle', 'cycle', 'trim|required|min_length[1]|max_length[10]');
				
				if ($this->form_validation->run() == FALSE)
				{
				   $this->form_validation->error_array();
				   $this->data['error'] = "désolé mais vous devez obligatoirement enregistrer les informations";
				   $this->render("home/register/forms", "Enregistrement ", $this->data);
				   
				}
				else{
					
					$data = [];
					$data['coderecuparmail'] =$this->input->post('coderecuparmail');
					$data['etape']=$this->input->post('etape');
					
					$etape2=$this->registration->register($data);
					
				}
				//var_dump($_POST);
			}
			elseif($_POST['etape']==3){
				$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
				$this->form_validation->set_rules('numactivation', 'numero d activation', 'trim|required|min_length[1]|max_length[255]');
				
				if ($this->form_validation->run() == FALSE)
				{
				   $this->form_validation->error_array();
				   $this->data['error'] = "désolé mais vous devez obligatoirement enregistrer les informations";
				   $this->render("home/register/forms", "Enregistrement des écoles", $this->data);
				   
				}
				else{
					
					$data = [];
					$data['numactivation'] =$this->input->post('numactivation');
					$data['etape']=$this->input->post('etape');
					
					$etape3=$this->registration->register($data);
					
				}
				//var_dump($_POST);

			}
			elseif($_POST['etape']==4){
				$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
				$this->form_validation->set_rules('mentionfr', 'mentionfr', 'trim|required|min_length[1]|max_length[255]');
				$this->form_validation->set_rules('mentionen', 'mentionen', 'trim|required|min_length[1]|max_length[255]');
				$this->form_validation->set_rules('siglefr', 'sigleen', 'trim|required|min_length[1]|max_length[255]');
				$this->form_validation->set_rules('sigleen', 'sigleen', 'trim|required|min_length[1]|max_length[255]');
				
				if ($this->form_validation->run() == FALSE)
				{
				   $this->form_validation->error_array();
				   $this->data['error'] = "désolé mais vous devez obligatoirement enregistrer les informations";
				   $this->render("home/register/forms", "Enregistrement des écoles", $this->data);
				   
				}
				else{
					//var_dump($ecole);
					$data = [];
					$data['mentionfr'] =$this->input->post('mentionfr');
					$data['mentionen'] =$this->input->post('mentionen');
					$data['siglefr'] =$this->input->post('siglefr');
					$data['sigleen'] = $this->input->post('sigleen');
					$data['etape']=$this->input->post('etape');
					$data['cycle'] = $this->input->post('cycle');
					
					$mention=$this->registration->add_schoolgenerale($data);
					
				}
				//var_dump($_POST);

				var_dump($_POST);
				//die;
			}

		}
		else{

			$this->render("home/register/forms", "Accueil");

		}
		//var_dump($_POST);
		
	}
}
