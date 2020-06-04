<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

  public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'AdminModel');
	}
	public function index()
	{
		$this->render_admin('admin/index');
	}

	public function users()
	{
		$this->data['users'] =  $this->AdminModel->usersList();
		$this->render_admin('admin/utilisateurs/index');
	}
	public function trajets()
	{
		$this->data['trajets'] =  $this->AdminModel->trajetsList();
		$this->render_admin('admin/trajets/index');
	}
	public function reservations()
	{
		$this->data['reservations'] =  $this->AdminModel->reservationsList();
		$this->render_admin('admin/reservations/index');
	}
	public function annonces()
	{
		$this->data['annonces'] =  $this->AdminModel->annoncesList();
		$this->render_admin('admin/annonces/index');
	}
	public function voitures()
	{
		$this->data['voitures'] =  $this->AdminModel->voituresList();
		$this->render_admin('admin/voitures/index');
	}
	public function paiements()
	{
		$this->data['paiements'] =  $this->AdminModel->paiementsList();
		$this->render_admin('admin/paiements/index');
	}
}
	?>
