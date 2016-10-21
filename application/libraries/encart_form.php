<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encart_form{

    public function formulaire_salon()
    {
        $CI =& get_instance();
        $CI->load->model('salon_model');
        $data = array();
        $data['encart'] = $CI->salon_model->get_salon();
        $temoignages = $CI->load->view('fictive', $data, true);
    }
    
    public function formulaire_porte_ouvert()
    {
        $CI =& get_instance();
        $CI->load->model('portes_ouvertes_model');
        $data = array();
        $data['encart'] = $CI->porte_ouverte_model->get_porte_ouverte();
        $temoignages = $CI->load->view('fictive', $data, true);
    }
    
    public function formulaire_reunion_info($page)
    {
        $CI =& get_instance();
        $CI->load->model('reunion_informations_model');
        $data = array();
        $data['encart'] = $CI->reunion_info_model->get_reunion_info();
        $temoignages = $CI->load->view('fictive', $data, true);
    }
}