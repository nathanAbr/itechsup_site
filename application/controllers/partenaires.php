<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partenaires extends CI_Controller {

	public function index()
	{
		$this->get_partenaires();
	}
    
    public function get_partenaires()
	{
        $this->load->model('partenaires_model');
        $data = array();
        $data['partenaire'] = $this->partenaires_model->get_partenaire();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('presentation');
        $content = $this->load->view('partenaires', $data, true);
        $this->load->view('content', array('content'=>$content));
        
	}
    
}