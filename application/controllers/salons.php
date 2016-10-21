<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salons extends CI_Controller {

	public function index()
	{
		$this->salon();
	}
    
    public function salon()
	{
        $this->load->model('salon_model');
        $data = array();
        $data['salons'] = $this->salon_model->get_salon();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('salons');
        $content = $this->load->view('salon', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}