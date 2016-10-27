<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Disconnect extends CI_Controller {
    
    public function index(){
        $data = array();
        $this->session->unset_userdata('member-id');
        $content = $this->load->view('connect_form', $data, true);
        $this->load->view('connect', array('content'=>$content));
    }
}