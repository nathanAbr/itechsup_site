<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presentation extends CI_Controller {

	public function index()
	{
		$this->get_presentation();
	}
    
    public function get_presentation()
	{
        $this->load->model('presentation_model');
        $data = array();
        $data['presentation'] = $this->presentation_model->get_presentation();
        $data['img_pages'] = $this->images_pages->index('presentation');
        $data['header'] = $this->header->index();
        $data['temoignages'] = $this->temoignages->presentation();
        $content = $this->load->view('presentation', $data, true);
        $this->load->view('content', array('content'=>$content));
        
	}
    
}