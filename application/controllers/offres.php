<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offres extends CI_Controller {

	public function index()
	{
		$this->offre();
	}
    
    public function offre()
	{
        $this->load->model('formation_model');
        $data = array();
        $data['type_form'] = $this->formation_model->get_type_formation();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('offres');
        $content = $this->load->view('offres', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}