<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Trajet_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}

	public function enregistrer_trajet($data)
	{
		/*$this->db->where('pseudo', $pseudo);
		$this->db->where('password', $mdp);
		$query = $this->db->get('users');*/
		$message=[];

		$valToSave= array('voiture' => $data['voiture'],'villedepart'=>$data['depart'],'villearrive'=>$data['arrive'],'prixplace'=>$data['prix'],'datedepart'=>$data['datedepart'],'datearrive'=>$data['datearrive'],'users'=>$data['pseudo'],'infos'=>$data['infos'],'nombreplace'=>$data['place'],'place_disponible'=>$data['place']);
				$resultat=$this->db->set($valToSave)->insert('trajet');

		if ($resultat) {
			
			echo json_encode($message=array('etat' => 1,'message'=>'L enregistrement du trajet cest deroule avec success'));
			//return TRUE;
		}
		else{
			echo json_encode($message=array('etat' => 0,'message'=>'L enregistrement du trajet a échoué'));
			//return false;
		}
		return !empty($message)?$message:null;
	}

	public function get_trajet($data){
		$query= $this->db->query("SELECT * FROM trajet WHERE id = ?", array($data['id']));
		return $query;
	}

	function listetouttrajet()
	{
		$query = $this->db->query("SELECT * FROM trajet ORDER BY id DESC");
		/*foreach ($query->result() as $row) {
			foreach ($querys->result() as $rows) {
				if(($row->users == $rows->pseudo) AND ($row->id == $rows->trajet)){
					//unset($row);
				}
			}
		}*/
		return $query;
	}

	function trajet_users($data, $config, $offset){
		//$query= $this->db->query("SELECT * FROM trajet WHERE users = ? LIMIT ", array($data['pseudo'],$config['per_page'], $offset));
		$this->db->select('*');
    	$this->db->from('trajet');
    	$this->db->where('users',$data['pseudo']);
	    $this->db->limit($config['per_page'], $offset);  
	    $query = $this->db->get();
		return $query;
	}

	function trajet_user($data){
		$query= $this->db->query("SELECT * FROM trajet WHERE users = ?", array($data['pseudo']));
		/*$this->db->select('*');
    	$this->db->from('trajet');
    	$this->db->where('users',$data['pseudo']);
	    $this->db->limit($config['per_page'], $offset);  
	    $query = $this->db->get();*/
		return $query;
	}

	function num_rows_trajet(){
		$data = $this->db->get("trajet");
		return $data;
	}

	function modifier_trajet($data){
		$valToUpdate = array('voiture' => $data['voiture'],'villedepart'=>$data['depart'],'villearrive'=>$data['arrive'],'prixplace'=>$data['prix'],'datedepart'=>$data['datedepart'],'datearrive'=>$data['datearrive'],'users'=>$data['pseudo'],'infos'=>$data['infos'],'nombreplace'=>$data['place']);
		$this->db->where('id', $data['id']);
		$resultat = $this->db->update('trajet', $valToUpdate);
		/*$where = "id =".$data['id']; 
		$resultat = $this->db->update_string('trajet', $valToUpdate, $where);*/	
		if ($resultat) {
			
			echo json_encode($message=array('etat' => 1,'message'=>'L enregistrement du trajet cest deroule avec success'));
			//return true;
		}
		else{
			echo json_encode($message=array('etat' => 0,'message'=>'L enregistrement du trajet a échoué'));
			//return false;
		}	
	}

	function supprimer_trajet($data){
		$valToUpdate = array('statut' => 'Annuler');
		$this->db->where('id',  $data['id']);
		$resultat = $this->db->update('trajet', $valToUpdate);
	}

	function reservation($data){
		$message = [];
		$query = $this->db->query("SELECT * FROM trajet WHERE id = ?", array($data['id']));
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$value = $row->place_disponible - $data['place'];
				$valToUpdate = array('place_disponible'=>$value);
				$this->db->where('id', $data['id']);
				$resultat = $this->db->update('trajet', $valToUpdate);
				if($resultat){
					$valToSave = array('trajet'=>$data['id'], 'pseudo'=>$data['pseudo'], 'place'=>$data['place']);
					$result=$this->db->set($valToSave)->insert('reservations');
					if ($resultat) {
				
						echo json_encode($message=array('etat' => 1,'message'=>'L enregistrement du trajet cest deroule avec success'));
						//return TRUE;
					}
					else{
						echo json_encode($message=array('etat' => 0,'message'=>'L enregistrement du trajet a échoué'));
						//return false;
					}
					return !empty($message)?$message:null;
				}
				else{
					return !empty($message)?$message:null;
				}
			}
		}
		else{
			return !empty($message)?$message:null;
		}
	}

	function row_reservation_user($data){
		//$query = $this->db->query("SELECT * FROM reservations WHERE id = ?", array($data['pseudo']));
		$this->db->select('trajet.voiture,trajet.villedepart,trajet.villearrive,trajet.datedepart,trajet.datearrive,trajet.prixplace, trajet.statut,trajet.place_disponible,reservations.place,reservations.date,reservations.id,reservations.status,reservations.trajet');
		$this->db->from('trajet');
		$this->db->join('reservations','reservations.trajet=trajet.id');
		$this->db->where('reservations.pseudo',$data['pseudo']);
		$query=$this->db->get();
		return $query;
	}

	function reservation_user($data,$config, $offset){
		//$query = $this->db->query("SELECT * FROM reservations WHERE id = ?", array($data['pseudo']));
		$this->db->select('trajet.voiture,trajet.villedepart,trajet.villearrive,trajet.datedepart,trajet.datearrive,trajet.prixplace, trajet.statut,trajet.place_disponible,reservations.place,reservations.date,reservations.id,reservations.status,reservations.trajet');
		$this->db->from('trajet');
		$this->db->join('reservations','reservations.trajet=trajet.id');
		$this->db->where('reservations.pseudo',$data['pseudo']);
		$this->db->limit($config["per_page"],$offset);
		$query=$this->db->get();
		return $query;
	}

	function annuler_reservation($data){
		/*$this->db->select('trajet.voiture,trajet.villedepart,trajet.villearrive,trajet.datedepart,trajet.datearrive,trajet.prixplace, trajet.statut,trajet.place_disponible,reservations.place,reservations.date,reservations.id,reservations.status,reservations.trajet');
		$this->db->from('trajet');
		$this->db->join('reservations','reservations.trajet=trajet.id');
		$this->db->where('reservations.id',$data['id']);
		$query=$this->db->get();*/

		$query = $this->db->query("SELECT * FROM reservations WHERE id = ?", array($data['id']));
		$val = 0;
		$valToUpdate = array('status' => 'annuler','place'=>$val);
		$this->db->where('id', $data['id_reservation']);
		$resultat = $this->db->update('reservations', $valToUpdate);
				
		if ($resultat) {
			$valToUpdates = array('place_disponible'=>$data['place_disponible']);
			$this->db->where('id', $data['id_trajet']);
			$result = $this->db->update('trajet', $valToUpdates);
			if($result){
				echo json_encode($message=array('etat' => 1,'message'=>'Reservation annulée avec success'));
			}
			else{
				echo json_encode($message=array('etat' => 0,'message'=>'Annulation échouée'));
			}
		}
		else{
			echo json_encode($message=array('etat' => 0,'message'=>'Annulation échouée'));
		}
		
		return !empty($message)?$message:null;
	}

	function form_modifier_reservation($data){
		$this->db->select('trajet.voiture,trajet.villedepart,trajet.villearrive,trajet.datedepart,trajet.datearrive,trajet.prixplace, trajet.statut,trajet.infos,reservations.place,reservations.date,trajet.place_disponible,trajet.nombreplace,reservations.id,reservations.status,reservations.trajet');
		$this->db->from('trajet');
		$this->db->join('reservations','reservations.trajet=trajet.id');
		$this->db->where('reservations.pseudo',$data['pseudo']);
		//$this->db->where('trajet.id',$data['id']);
		$query=$this->db->get();
		return $query;
	}

	function modifier_reservation($data){
		$valToUpdate = array('place'=>$data['place'],'status'=>'En cours');
		$this->db->where('id', $data['id']);
		$resultat = $this->db->update('reservations', $valToUpdate);
		/*$where = "id =".$data['id']; 
		$resultat = $this->db->update_string('trajet', $valToUpdate, $where);*/	
		if ($resultat) {
			$valToUpdates = array('place_disponible'=>$data['place_disponible']);
			$this->db->where('id', $data['id_trajet']);
			$result = $this->db->update('trajet', $valToUpdates);
			if($result){
				echo json_encode($message=array('etat' => 1,'message'=>'L enregistrement du trajet cest deroule avec success'));
			}
			else{
			echo json_encode($message=array('etat' => 0,'message'=>'L enregistrement du trajet a échoué'));
			}
		}
		else{
			echo json_encode($message=array('etat' => 0,'message'=>'L enregistrement du trajet a échoué'));
			//return false;
		}
		return !empty($message)?$message:null;	
	}

	function rechercher_trajet($data){
		if($data['depart']=='' AND $data['arrive']=='' AND $data['date']==''){
			$query = $this->db->query("SELECT * FROM trajet ORDER BY id DESC");
		}
		elseif($data['depart']!='' AND $data['arrive']!='' AND $data['date']!=''){
			$query= $this->db->query("SELECT * FROM trajet WHERE villedepart = ? AND villearrive = ? AND datedepart = ?", array($data['depart'],$data['arrive'],$data['date']));
		}
		elseif($data['depart']!='' AND $data['arrive']=='' AND $data['date']==''){
			$query= $this->db->query("SELECT * FROM trajet WHERE villedepart = ?", array($data['depart']));
		}
		elseif($data['depart']=='' AND $data['arrive']!='' AND $data['date']==''){
			$query= $this->db->query("SELECT * FROM trajet WHERE villearrive = ?", array($data['arrive']));
		}
		elseif($data['depart']=='' AND $data['arrive']=='' AND $data['date']!=''){
			$query= $this->db->query("SELECT * FROM trajet WHERE datedepart = ?", array($data['date']));
		}
		elseif($data['depart']!='' AND $data['arrive']!='' AND $data['date']==''){
			$query= $this->db->query("SELECT * FROM trajet WHERE villedepart = ? AND villearrive = ?", array($data['depart'],$data['arrive']));
		}
		elseif($data['depart']=='' AND $data['arrive']!='' AND $data['date']!=''){
			$query= $this->db->query("SELECT * FROM trajet WHERE villearrive = ? AND datedepart = ?", array($data['arrive'],$data['date']));
		}
		elseif($data['depart']!='' AND $data['arrive']=='' AND $data['date']!=''){
			$query = $this->db->query("SELECT * FROM trajet WHERE villedepart = ? AND datedepart = ?", array($data['depart'],$data['date']));
		}
		return $query;
	}
}
