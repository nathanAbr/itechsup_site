<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contrats extends CI_Controller {

	public function index()
	{
		$this->Contrat();
	}
    
    public function contrat($url)
	{
        $this->load->model('contrats_model');
        $data = array();
        $data['contrats'] = $this->contrats_model->get_contrat($url);
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('presentation');
        $content = $this->load->view('contrats', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}