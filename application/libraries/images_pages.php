<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images_pages{

    public function index($pages)
    {
        $CI =& get_instance();
        $CI->load->model('images_pages_model');
        $data = array();
        $data['images_pages'] = $CI->images_pages_model->get_images($pages);
        $image_page = $CI->load->view('fictive', $data, true);
    }
}