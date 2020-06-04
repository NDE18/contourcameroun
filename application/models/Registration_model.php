<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration_model extends CI_Model
{

	public function __construct(){
		parent::__construct();
		$this->load->helper('files_helper');
		$this->load->helper('email_helper');
		$this->load->library('twilio');
		//$this->load->helper('twilio_helper');
		//require_once FCPATH."application/libraries/PHPMailer_5.2.1/class.phpmailer.php";
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
	public function register($data=''){
		$etape1=[];
		$etape2=[];
		$etape3=[];
		$idusers='';
		if($data['etape']==1){
             $users= $this->db->select('*')
             ->from('users')
             ->where(array('email'=>$data['email'],'phone'=>$data['phone'], 'pseudo'=>$data['pseudo']))
             ->get()->result();        
                 if(!empty($users)){
            		     $message=array('etat'=>-1,'message'=>'Desole mais ce users existe deja');
                	     echo json_encode($message);
                 }
                 else{
					// 
					$etape1=array('name'=>$data['nom'],'prenom'=>$data['prenom'],'speudo'=>$data['speudo'],
					'datenaissance'=>$data['datenaissance'],'phone'=>$data['phone'],'email'=>$data['email'],'mdp'=>$data['mdp'],'coderecuparmail'=>generateRandomString(),'numactivation'=>generateRandomStringNew());
					$nom=$data['nom'];
					$statut=sendUserMail('lemanthalist@gmail.com',$etape1['email'],$etape1['coderecuparmail'],$etape1['name']);
					/**
					 * creer un fichier avec le nom n'est pas une bonne facon de faire 
					 * car plusieurs personne peuvant avoir le meme nom
					 */
					$statutFileCreation=createFile($data['email'],"a","json");
					if($statutFileCreation['statut']==true) writeInFile($statutFileCreation['name'],json_encode($etape1,JSON_FORCE_OBJECT,JSON_PRETTY_PRINT)); 
					
					if($statut['etat']==0)
					{
                        $message=array('etat'=>-1,'message'=>$statut['message'],'email'=>$data['email']);
                        echo json_encode($message);
                    }
                    else{
                       
                        $message=array('etat'=>1,'message'=>$statut['message'],'email'=>$data['email']);
                        echo json_encode($message);
                    }
				}
                return !empty($message)?$message:null;
                
		}
		if($data['etape']==2){
			// var_dump($data);
			// //echo $data['email']; die;
			$content=readInFile($data['email'],".json",2);
			$message=[];
			foreach ($content as $key => $value) 
			{
				$arr=json_decode($content[$key],true);
				if($data['coderecuparmail']==$arr['coderecuparmail'])
				{ 
					//$response = $this->twilio->sms('+237690309847', '+237'.$arr['phone'],$arr['numactivation']);

					$etape2=true;
				 }
			}
			if($etape2==true) echo json_encode($message=array('etat' => 1,'message'=>'une erreur c est produite','email'=>$data['email']));
			elseif ($etape2!=true) echo json_encode($message=array('etat' => -1,'message'=>'une erreur c est produite','email'=>$data['email']));
		         
            return !empty($message)?$message:null;
                
		}
		if($data['etape']==3){
			$content=readInFile($data['email'],".json",2);
			$message=[];
			foreach ($content as $key => $value) 
			{
				# code...
				$arr=json_decode($content[$key],true);
				if($data['numactivation']==$arr['numactivation']){ $etape3=true;
				$valToSave= array('name' => $arr['name'],'date_naissance'=>$arr['datenaissance'],'prenom'=>$arr['prenom'],'email'=>$arr['email'],'pseudo'=>$arr['speudo'],'password'=>$arr['mdp'],'phone'=>$arr['phone']);
				$resultat=$this->db->set($valToSave)->insert('users');
				$idusers=$this->db->insert_id();
				// {
					deleteusersfile($data['email'],".json");
				 }
			}
			if($etape3==true) echo json_encode($message=array('etat' => 1,'message'=>'l inscription c est deroule avec success','users'=>$idusers,'logged_in'=>TRUE));
			elseif ($etape3!=true) echo json_encode($message=array('etat' => -1,'message'=>'erreur durant la troisieme etape'));
			         
            return !empty($message)?$message:null;
		}
	//}
	}
}
