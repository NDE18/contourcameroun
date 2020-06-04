<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	/**
	 * @var array
	 */
	protected $data = [];

	/**
	 * @var array
	 */
	protected $active_menus = [];

	/**
	 * @var string
	 */
	protected $zone = '';

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
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	/**
	 * @param string $view
	 * @param string $titre
	 * @param bool $menu
	 * @param bool $footer
	 */
	protected function render($view = 'index', $titre='', $menu=true, $footer=true)
	{
		/*if(!$view Or !is_string($view)) $view = 'index';

		$this->load->view('header', array('titre'=>$titre));

		if($menu === TRUE And session_data('connect') === TRUE) {
			$this->load->view('navbar');
		}

		$this->execute($view);

		if($footer === TRUE And session_data('connect') === TRUE) {
			$this->load->view('footer', ['active_menus'=>$this->active_menus]);
		}*/
	}

	protected function execute($view)
	{
		$this->load->view($this->zone. '/' .$view, $this->data);
	}

	protected function bonjour()
	{
		echo "how?";
	}

	/**
	 * @param array ...$expression
	 */
	protected function vardump(...$expression)
	{
		echo "<pre>";
		foreach ($expression as $item) {
			var_dump($item);
		}
		echo "</pre>";
		die();
	}
}
