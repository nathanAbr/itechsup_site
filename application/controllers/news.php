<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->get_news();
	}
    
    public function get_news()
	{
        $this->load->model('news_model');
        $data = array();
        $data['news'] = $this->news_model->get_news_page();
        $data['img_pages'] = $this->images_pages->index('event');
        $data['header'] = $this->header->index();
        $content = $this->load->view('news', $data, true);
        $this->load->view('content', array('content'=>$content));
        
	}
    
}