<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    protected $annonce          = 'annonce';
    protected $categorie        = 'categorie';
    protected $news             = 'news';
    protected $provenance       = 'provenance';
    protected $type_annonce     = 'type_annonce';
    protected $type_news        = 'type_news';

    protected $subquery;

    /**
     * MY_Model constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Subquery');
        $this->subquery = new Subquery();
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