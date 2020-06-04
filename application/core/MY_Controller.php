<?php

    class MY_Controller extends CI_Controller
    {
        /**
         *
         * @var array
         */
        protected $data = [];

        protected $page_model = '';

        /**
         * @var string
         */
        protected $zone = '';
        
        function __construct()
        {
            parent::__construct();

            //$this->vardump();
            // if(session_data('connect')!==TRUE And !(count($this->uri->rsegments)==2 And strcmp(strtolower($this->uri->rsegment(1)), 'accueil')==0)){
            //     set_flash_data(array('uri_string'=>$this->uri->uri_string()));
            //     redirect();
            // }

            // if(isset($_POST['menu_lang'])){
            //     set_session_data(array('language'=>$_POST['menu_lang']));
            // }
            // $this->config->set_item('language', session_data('language'));
            
            // $this->lang->load('cnet_roles');
            // $this->load->model('User_model','M_user');
        }

        /**
         *
         * @param string $view La vue a charger
         * @param string $titre Le titre de la vue
         * @param bool|string|array $not_menu Les menus à ne pas charger
         */
        protected function render($view = 'index', $titre='', $menu=true)
        {
            if(!$view) $view = 'index';

            $this->load->view('home/include/header', array('titre'=>$titre));
            //$this->load->view('home/include/nav_header_section', array('titre'=>$titre));
            //$this->load->view('home/include/mission_section', array('titre'=>$titre));
            //$this->load->view('home/include/choose_section', array('titre'=>$titre));
            //$this->load->view('home/include/news_section', array('titre'=>$titre));

            //$this->vardump($menu , session_data('connect'));
            // if($menu === TRUE And session_data('connect') === TRUE)
            // {
            //     //$this->load->view('navbar',array('login'=>session_data('login'),'statut'=>session_data('statut')));
            // }

            if($this->page_model){
                $this->data['view'] = $view;
                $this->load->view($this->page_model, $this->data);
            }else{
                $this->load->view($view, $this->data);
            }

            $this->load->view('home/include/footer');
        }
		protected function render_admin($view = 'index', $titre='', $menu=true)
        {
            if(!$view) $view = 'index';

            $this->load->view('admin/include/header', array('titre'=>$titre));
            $this->load->view('admin/include/leftandtop-menu', array('titre'=>$titre));
            if($this->page_model){
                $this->data['view'] = $view;
                $this->load->view($this->page_model, $this->data);
            }else{
                $this->load->view($view, $this->data);
            }

            $this->load->view('admin/include/footer');
        }
        protected function execute($view)
        {
            $this->load->view($view, $this->data);
        }

        protected function logout()
        {
            $session = session_data(array('language'));
            unset_session_data();
            set_session_data($session);
        }

        protected function vardump(...$expression)
        {
            echo "<pre>";
            foreach ($expression as $item) {
                var_dump($item);
            }
            echo "</pre>";
            die();
        }

        protected function ip()
        {
            $result = new stdClass();
            $result->local = $this->local_ip();
            $result->public = $this->public_ip();
            return $result;
        }

        private function public_ip()
        {
            $url = 'https://api.ipify.org';
            $ip = @file_get_contents($url);

            if($this->input->valid_ip($ip)){
                return $ip;
            }
            return NULL;
        }

        private function local_ip()
        {
            $ip = gethostbyname(trim(`hostname`));
            if($this->input->valid_ip($ip)){
                return $ip;
            }
            return NULL;
        }
    }
