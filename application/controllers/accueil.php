<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
		$this->affichage_accueil();
	}
    
    public function affichage_accueil()
	{
        $this->load->model('news_model');
        $this->load->model('slide_model');
        $this->load->model('formation_model');
        $data = array();
        $data['slide'] = $this->slide_model->get_slider();
        $data['news'] = $this->news_model->get_news_accueil();
        $data['type_formation'] = $this->formation_model->get_type_formation();
        $data['header'] = $this->header->index();
        $content = $this->load->view('accueil', $data, true);
        $this->load->view('content', array('content'=>$content));
        
	}
    
}