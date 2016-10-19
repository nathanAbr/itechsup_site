<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header{

    public function index()
    {
        $CI =& get_instance();
        $CI->load->model('formation_model');
        $CI->load->model('contrats_model');
        $CI->load->model('news_model');
        $data = array();
        $data['header'] = $CI->formation_model->get_type_formation();
        $data['contrat'] = $CI->contrats_model->get_contrat_header();
        $data['news'] = $CI->news_model->get_news_header();
        $head = $CI->load->view('header', $data, true);
        $CI->load->view('header', array('head' => $head));
    }
}