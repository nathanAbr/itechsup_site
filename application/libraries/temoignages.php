<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temoignages{

    public function formations($page)
    {
        $CI =& get_instance();
        $CI->load->model('temoignages_model');
        $data = array();
        $data['temoignage'] = $CI->temoignages_model->get_temoignages_formations($page);
        $temoignages = $CI->load->view('fictive', $data, true);
    }
    
    public function presentation()
    {
        $CI =& get_instance();
        $CI->load->model('temoignages_model');
        $data = array();
        $data['temoignage'] = $CI->temoignages_model->get_temoignages_presentation();
        $temoignages = $CI->load->view('fictive', $data, true);
    }
    
    public function contrats($page)
    {
        $CI =& get_instance();
        $CI->load->model('temoignages_model');
        $data = array();
        $data['temoignage'] = $CI->temoignages_model->get_temoignages_contrats($page);
        $temoignages = $CI->load->view('fictive', $data, true);
    }
}