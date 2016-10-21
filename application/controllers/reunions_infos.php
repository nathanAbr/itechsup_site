<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reunions_infos extends CI_Controller {

	public function index()
	{
		$this->reunion_info();
	}
    
    public function reunion_info()
	{
        $this->load->model('reunion_info_model');
        $data = array();
        $data['reunion_info'] = $this->reunion_info_model->get_reunion_info();
        $data['date_reunion_info'] = $this->reunion_info_model->get_dates_reunion_info();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('reunion_info');
        $content = $this->load->view('reunion_info', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}