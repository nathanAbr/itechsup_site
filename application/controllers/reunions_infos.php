<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reunions_infos extends CI_Controller {

	public function index()
	{
		$this->reunion_info();
	}
    
    public function formations()
	{
        $this->load->model('reunion_info_model');
        $data = array();
        $data['reunion_info'] = $this->reunion_info_model->get_reunion_info();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('presentation');
        $content = $this->load->view('reunions_infos', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}