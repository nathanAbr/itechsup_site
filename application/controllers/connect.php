<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Connect extends CI_Controller {
    
    
    public function index(){
        $data = array();
        if(!empty($this->session->userdata('member-id'))){
            redirect('formations');           
        }else{
            $content = $this->load->view('connect_form', $data, true);
            $this->load->view('connect', array('content'=>$content));
        }
    }

    public function valide_connect()
    {
        $data = array();
        $this->form_validation->set_rules('log', '"Log"', 'trim|required|min_length[4]|max_length[30]|encode_php_tags|xss_clean');
        $this->form_validation->set_rules('mdp', '"Mot de passe"', 'trim|required|min_length[4]|max_length[30]|alpha_dash|encode_php_tags|xss_clean');
        
        if ($this->form_validation->run() == true) {
            $this->load->model('data_user_model', 'data');
            if(!empty($this->data->verif($this->input->post('log'), hash('md5', $this->input->post('mdp'))))){
                $session = $this->data->verif($this->input->post('log'), hash('md5', $this->input->post('mdp')));
                $this->session->set_userdata('member-id', $session);
                $this->session->userdata('member-id');
                redirect('formations');
            }
            else{
                $data['error'] = "Login ou mot de passe incorrect";
                $content = $this->load->view('connect_form', $data, true);
                $this->load->view('connect', array('content'=>$content));
            }
        }
        else{
            $content = $this->load->view('connect_form', $data, true);
            $this->load->view('connect', array('content'=>$content));
        }
    }

}