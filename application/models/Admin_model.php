<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	public function __construct(){
		parent::__construct();
	}

	public function auth($login, $pass)
	{
		$query= $this->db->query("SELECT * FROM users WHERE etat=1 AND login = ? AND password = ?", array($login, $pass));
		return $query;
	}
	public function usersList()
	{
		$allusers=$this->db->select('*')
							->from('users')
							->get()->result();

		return $allusers;
	}
	public function trajetsList()
	{
		$alltrajets=$this->db->select('*')
							 ->from('trajet')
							 ->get()->result();

		return $alltrajets;
	}
	public function reservationsList()
	{
		$allreservations=$this->db->select('*')
									->from('reservation')
									->get()->result();

		return $allreservations;
	}
	public function annoncesList()
	{
		$allannonces=$this->db->select('*')
									->from('annonce')
									->get()->result();

		return $allannonces;
	}
	public function voituresList()
	{
		$allvoitures=$this->db->select('*')
									->from('voiture')
									->get()->result();

		return $allvoitures;
	}
	public function paiementsList()
	{
		$allpaiements=$this->db->select('*')
									->from('paiement')
									->get()->result();

		return $allpaiements;
	}
}
