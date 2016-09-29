<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidater extends CI_Controller {

	public function index()
	{
		$this->candidature();
	}
    
    public function candidature()
	{
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('candidater');
        $content = $this->load->view('candidater', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
    public function valide_form()
    {
        $this->form_validation->set_rules('nom', '"Nom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenom', '"Prénom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mail', '"E-mail"', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('adresse', '"Adresse"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tel', '"Téléphone"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('cp', '"Code postal"', 'trim|required|xss_clean');   
        
        if ($this->form_validation->run() == false) {
            $data['header'] = $this->header->index();
            $content = $this->load->view('candidater', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
        else
        {
            $data['header'] = $this->header->index();
            $content = $this->load->view('candidature_valide', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
    }
    
    public function send_form($to, $objet, $message)
    {
        
    }
    
}