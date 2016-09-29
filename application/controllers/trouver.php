<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trouver extends CI_Controller {

	public function index()
	{
		$this->nous_trouver();
	}
    
    public function nous_trouver()
	{
        $data = array();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('presentation');
        $content = $this->load->view('nous_trouver', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}