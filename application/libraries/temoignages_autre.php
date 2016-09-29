<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temoignages_autre{

    public function index($page)
    {
        $CI =& get_instance();
        $CI->load->model('temoignages_model');
        $data = array();
        $data['temoignages'] = $CI->temoignages_model->get_temoignages_autres($page);
        $temoignage = $CI->load->view('fictive', $data, true);
    }
}