<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  public function __construct()
	{
		parent::__construct();
		$this->load->model('Registration_model','registration');
		$this->load->model('trajet_model', 'trajet');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->model('trajet_model');
		$data['fetch_data'] = $this->trajet_model->listetouttrajet();
		//$this->render('home/index', $data);
		$this->load->view("home/include/header");
		$this->load->view("home/index", $data);
		$this->load->view("home/include/footer");
	}

	public function register1(){
		$this->render('home/register/forms');
	}
	public function register(){

		if(!empty($_POST)){
			$etape1 =[];
			$etape2 =[];
			$etape3 =[];
			if($_POST['etape']==1){

				$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
				$this->form_validation->set_rules('nom', 'Votre nom', 'trim|required|min_length[1]|max_length[255]');
				$this->form_validation->set_rules('prenom', 'Votre prenom', 'trim|required|min_length[1]|max_length[100]');
				$this->form_validation->set_rules('datenaissance', 'Votre date de naissance', 'trim|required|min_length[1]|max_length[255]');
				$this->form_validation->set_rules('speudo', 'Votre speudo', 'trim|required|min_length[1]|max_length[100]');
				$this->form_validation->set_rules('email', 'Votre email', 'trim|required|min_length[1]|max_length[100]');
				$this->form_validation->set_rules('phone', 'Votre phone', 'trim|required|min_length[1]|max_length[100]');
				$this->form_validation->set_rules("mdp", "Votre mot de passe", "trim|required|min_length[1]|max_length[100]");
				$this->form_validation->set_rules("cmdp", "La confirmation de votre mot de passe ", "trim|required|min_length[1]|max_length[100]");
				
				if ($this->form_validation->run() == FALSE)
				{
				   //$message=[];
				   $message = $this->form_validation->error_array();
				   $this->data['error'] = "désolé mais vous devez obligatoirement enregistrer les informations";
				  // echo json_encode(array('etat' =>-1 ,'message'=>$message));
				   $this->render("home/register/forms", "Enregistrement ", $this->data);
				   
				}
				else
				{
					
					//echo "ici";
					//var_dump($_FILES);die;
					 /*var_dump($_POST);
					echo $this->input->post('file');*/
					 
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
					if($this->input->post('file')){
						
						$config['upload_path']='./assets/images/upload';
						$config['file_name']=$_POST['file'];
						$config['overwrite']=TRUE;
						$config['ollowed_types']='jpg|jpeg|png|gif';
						$config['max_size']='2048';
						$config['max_width']='1400';
						$config['max_height']='1400';
						$this->load->library('upload',$config);
						if(!$this->upload->do_upload("image")){
							$this->data['error'] = $this->upload->display_errors();
							var_dump($this->data['error']); 
							die;
						}
						else{
							echo "success";
							die;
						}

					}
					/*$config['upload_path']="./assets/images";
					$config['allowed_types']='gif|jpg|png';
					$config['encrypt_name'] = TRUE;
					
					$this->load->library('upload',$config);
					if($this->upload->do_upload("file")){
						$data = $this->upload->data();

						//Resize and Compress Image
						$config['image_library']='gd2';
						$config['source_image']='./assets/images/'.$data['file_name'];
						$config['create_thumb']= FALSE;
						$config['maintain_ratio']= FALSE;
						$config['quality']= '60%';
						$config['width']= 600;
						$config['height']= 400;
						$config['new_image']= './assets/images/'.$data['file_name'];
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();

						/*$title= $this->input->post('title');
						$image= $data['file_name']; 
						
						$result= $this->upload_model->save_upload($title,$image);
						echo json_decode($result);*/
				/*		echo "sucess";
				}*/
					$etape1=$this->registration->register($data);
				}
			}
			elseif($_POST['etape']==2){
				
				$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
				$this->form_validation->set_rules('coderecuparmail', 'code recu par email', 'trim|required|min_length[3]|max_length[255]');
				
				if ($this->form_validation->run() == FALSE)
				{
				   //$message=[];
				   $message= $this->form_validation->error_array();
				   $this->data['error'] = "désolé mais vous devez obligatoirement enregistrer les informations";
				   $this->render("home/register/forms", "Enregistrement ", $this->data);
				 // echo json_encode(array('etat' =>-1 ,'message'=>$message));
				   
				}
				else{
					
					$data = [];
					$data['coderecuparmail'] =$this->input->post('coderecuparmail');
					$data['etape']=$this->input->post('etape');
					$data['email']=$this->input->post('email');

					
					$etape2=$this->registration->register($data);
					
				}
			}
			elseif($_POST['etape']==3){
				$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
				$this->form_validation->set_rules('numactivation', 'numero d activation', 'trim|required|min_length[1]|max_length[255]');
				
				if ($this->form_validation->run() == FALSE)
				{
				   //$message=[];
				   $message= $this->form_validation->error_array();
				   $this->data['error'] = "désolé mais vous devez obligatoirement enregistrer les informations";
				   $this->render("home/register/forms", "Enregistrement des écoles", $this->data);
				 // echo json_encode(array('etat' =>-1 ,'message'=>$message));
				   
				}
				else{
					
					$data = [];
					$data['numactivation'] =$this->input->post('numactivation');
					$data['etape']=$this->input->post('etape');
					$data['email']=$this->input->post('email');
					$etape3=$this->registration->register($data);
					
				}
			
			}
			// elseif ($_POST['etape']>3) {
			// 	# code...
			// 	$session_data= array('users' => $etape3['users'],'logged_in'=>TRUE);
			// 	$this->session->set_userdata($session_data);
			// 	redirect('home/userACCOUNT');
			// }
		}
		else{

			$this->render("home/register/forms", "Accueil");

		}	
	
	}

	public function userACCOUNT()
	{
		// $session_data= array('users' => $_POST['users'],'logged_in'=>$_POST['logged_in']);
		// $this->session->set_userdata($session_data);
		$this->render("home/homeUsers", "Accueil");

	}

	public function connexion(){

		$this->render("home/register/connexion", "Accueil");
	}

	public function validation_connexion(){

		$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
		$this->form_validation->set_rules('pseudo', 'Votre pseudo', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('mdp', 'Votre mot de passe', 'trim|required|min_length[1]|max_length[255]');
		if($this->form_validation->run()){

			$pseudo = $this->input->post('pseudo');
			$mdp = $this->input->post('mdp');

			$this->load->model(connexion_model);
			if($this->connexion_model->ok_connexion($pseudo, $mdp)){
				$session_data = array('pseudo' => $pseudo);
				$this->session->set_userdata($session_data);
				redirect(base_url().'home/ouvrir_session');
			}
			else
			{
				$this->session->set_flashdata('erreur', 'Pseudo et/ou mot de passe incorect(s)');
				redirect(base_url().'home/connexion');
			}
		}
		else{
			$this->connexion();
		}
	}

	public function ouvrir_session(){

		if($this->session->userdata('pseudo') != ''){
			//$this->render("home/homeUsers", "Accueil");
			$this->load->model('trajet_model');
			$data['fetch_data'] = $this->trajet_model->listetouttrajet();
			$this->load->view("home/include/header_user");
			$this->load->view("home/trajet/home_user", $data);
			$this->load->view("home/include/footer");
		}
		else{
			redirect(base_url() . 'home/connexion');
		}
	}

	public function deconnection(){
		$this->session->unset_userdata('pseudo');
		redirect(base_url().'home/connexion');
	}

	function supprimer_trajet(){
		$data['id'] = $this->input->post('id_trajet');
		$this->trajet->supprimer_trajet($data);

		//redirect(base_url().'trajet_controller/liste_trajet_user');
	}

	function form_reservation(){
		if($this->session->userdata('pseudo') != ''){
			$data['id'] = $this->input->post('id_trajet');
			$result['fetch_data'] = $this->trajet->get_trajet($data);
			//echo json_encode($data);
			$this->load->view("home/include/header_user");
			$this->load->view("home/trajet/reservation_trajet", $result);
			$this->load->view("home/include/footer");
		}
		else{
			redirect(base_url() . 'home/connexion');
		}
		//redirect(base_url() . 'home/connexion');
	}

	function reservation(){
		$data['id'] = $this->input->post('id_trajet');
		$data['place'] = $this->input->post('place_reserve');
		$data['pseudo'] = $this->session->userdata('pseudo');

		$resultat = $this->trajet->reservation($data);
	}

	function reservation_user(){
		$data['pseudo'] = $this->session->userdata('pseudo');

		$resultat['fetch_data'] = $this->trajet->reservation_user($data);
		$this->load->view("home/include/header_user");
		$this->load->view("home/trajet/reservation_user", $resultat);
		$this->load->view("home/include/footer");
	}

	function annuler_reservation(){
		$data['id_reservation'] = $this->input->post('id_reservation');
		$data['id_trajet'] = $this->input->post('id_trajet');
		$data['place_disponible'] = $this->input->post('place_disponible');
		//$data['id_trajet'] = $this->input->post('id_trajet');
		//$data['place'] = $this->input->post('place_disponible');
		$this->trajet->annuler_reservation($data);
	}

	function formmodifier_reservation(){
		$data['pseudo'] = $this->session->userdata('pseudo');
		$data['id'] = $this->input->post('id_reservation');
		$resultat['id'] = $this->input->post('id_reservation');
		$resultat['fetch_data'] = $this->trajet->form_modifier_reservation($data);

		$this->load->view("home/include/header_user");
		$this->load->view("home/trajet/form_modifier_reservation", $resultat);
		$this->load->view("home/include/footer");
		//$this->render("home/register/forms", "Accueil");
	}

	function modifier_reservation(){
		$data['pseudo'] = $this->session->userdata('pseudo');
		$data['id'] = $this->input->post('id_reservation');
		$data['place'] = $this->input->post('place_reserve');
		$data['place_disponible'] = $this->input->post('place_disponible') - $this->input->post('place_reserve');
		$data['id_trajet'] = $this->input->post('id_trajet');
		$this->trajet->modifier_reservation($data);
	}

	function rechercher_trajet(){
		$data['depart'] = $this->input->post('depart');
		$data['arrive'] = $this->input->post('arrive');
		$data['date'] = $this->input->post('date');
		$data['fetch_data'] = $this->trajet->rechercher_trajet($data);
		$this->load->view("home/include/header_user");
		$this->load->view("home/trajet/home_user", $data);
		$this->load->view("home/include/footer");
	}

	function nonconnectrechercher_trajet(){
		$data['depart'] = $this->input->post('depart');
		$data['arrive'] = $this->input->post('arrive');
		$data['date'] = $this->input->post('date');
		$data['fetch_data'] = $this->trajet->rechercher_trajet($data);
		$this->load->view("home/include/header");
		$this->load->view("home/index", $data);
		$this->load->view("home/include/footer");
	}

	function annonce_user(){
		$this->load->view("home/include/header_user");
		$this->load->view("home/trajet/annonce_user");
		$this->load->view("home/include/footer");
	}

	function nouvelle_annonce(){
		$this->load->view("home/include/header_user");
		$this->load->view("home/register/nouvelle_annonce");
		$this->load->view("home/include/footer");
	}

	function enregistrer_annonce(){
		$this->form_validation->set_error_delimiters('<p style="color:red">',"<p>");
		$this->form_validation->set_rules('type', 'Votre pseudo', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('titre', 'Votre mot de passe', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('detail', 'Votre mot de passe', 'trim|required|min_length[1]|max_length[255]');
		if($this->form_validation->run()){
			$data['pseudo'] = $this->session->userdata('pseudo');
			$data['type'] = $this->input->post('type');
			$data['titre'] = $this->input->post('titre');
			$data['detail'] = $this->input->post('detail');

			if($this->input->post('file')){
						
				$config['upload_path']='./assets/images/upload';
				$config['file_name']=$_POST['file'];
				$config['overwrite']=TRUE;
				$config['ollowed_types']='jpg|jpeg|png|gif';
				$config['max_size']='2048';
				$config['max_width']='1400';
				$config['max_height']='1400';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload("image")){
					$this->data['error'] = $this->upload->display_errors();
					var_dump($this->data['error']); 
					die;
				}
				else{
					echo "success";
					die;
				}

			}
		}
		else{
			$message = $this->form_validation->error_array();
			$this->load->view("home/include/header_user");
			$this->load->view("home/register/nouvelle_annonce",$message);
			$this->load->view("home/include/footer");
		}
	}
}
