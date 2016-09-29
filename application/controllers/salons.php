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
        $data['salon'] = $this->salon_model->get_salon();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('presentation');
        $content = $this->load->view('salons', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}