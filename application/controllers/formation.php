<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formation extends CI_Controller {

	public function index()
	{
		$this->formations();
	}
    
    public function formations($url)
	{
        $this->load->model('formation_model');
        $data = array();
        $data['formations'] = $this->formation_model->get_formation($url);
        $data['img_pages'] = $this->images_pages->index('formations');
        $data['header'] = $this->header->index();
        $data['temoignages'] = $this->temoignages->formations($url);
        $content = $this->load->view('formations', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}