<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offres_form extends CI_Controller {

	public function index()
	{
		$this->offre();
	}
    
    public function offre($url)
	{
        $this->load->model('offres_model');
        $data = array();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('offres_form');
        $data['offres'] = $this->offres_model->get_offres_form($url);
        $content = $this->load->view('offres_form', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}
        