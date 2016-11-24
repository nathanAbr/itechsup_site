<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentres extends CI_Controller {

	public function index()
	{
		$this->rentre();
	}
    
    public function rentre()
	{
        $this->load->model('rentres_model');
        $this->load->model('formation_model');
        $data = array();
        $data['type_form'] = $this->formation_model->get_type_formation();
        $data['form'] = $this->formation_model->get_all_formation();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('rentres');
        $data['rentres'] = $this->rentres_model->get_rentres();
        $content = $this->load->view('rentres', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}