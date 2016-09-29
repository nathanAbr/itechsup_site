<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temoignages_formations{

    public function index($page)
    {
        $CI =& get_instance();
        $CI->load->model('temoignages_model');
        $data = array();
        $data['temoignage'] = $CI->temoignages_model->get_temoignages_formations($page);
        $temoignages = $CI->load->view('fictive', $data, true);
    }
}