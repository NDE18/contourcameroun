<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connexion_model extends CI_Model
{
	public function ok_connexion($pseudo, $mdp)
	{
		$this->db->where('pseudo', $pseudo);
		$this->db->where('password', $mdp);
		$query = $this->db->get('users');

		if ($query->num_rows() > 0) {
			return true;
		}
		else{
			return;
		}
	}
}