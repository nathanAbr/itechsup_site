<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portes_ourvertes extends CI_Controller {

	public function index()
	{
		$this->porte_ouverte();
	}
    
    public function porte_ouverte()
	{
        $this->load->model('porte_ouverte_model');
        $data = array();
        $data['porte_ouverte'] = $this->porte_ouverte_model->get_porte_ouverte();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('presentation');
        $content = $this->load->view('portes_ouvertes', $data, true);
        $this->load->view('content', array('content'=>$content));
        
	}
    
}