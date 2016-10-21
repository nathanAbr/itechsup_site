<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portes_ouvertes extends CI_Controller {

	public function index()
	{
		$this->porte_ouverte();
	}
    
    public function porte_ouverte()
	{
        $this->load->model('porte_ouverte_model');
        $data = array();
        $data['portes_ouvertes'] = $this->porte_ouverte_model->get_porte_ouverte();
        $data['date_porte_ouverte'] = $this->porte_ouverte_model->get_dates_porte_ouverte();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('porte_ouverte');
        $content = $this->load->view('portes_ouvertes', $data, true);
        $this->load->view('content', array('content'=>$content));
        
	}
    
}