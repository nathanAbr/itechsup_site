<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offres extends CI_Controller {

	public function index()
	{
		$this->offre();
	}
    
    public function offre()
	{
        $this->load->model('offres_model');
        $data = array();
        $data['offre'] = $this->offres_model->get_offres();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('presentation');
        $content = $this->load->view('offres', $data, true);
        $this->load->view('content', array('content'=>$content));
        
	}
    
}