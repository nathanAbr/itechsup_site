<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->contacter();
	}
    
    public function contacter()
	{
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('contact');
        $content = $this->load->view('contact', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
    public function valide_contact_pro()
    {
        $this->form_validation->set_rules('nom', '"Nom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mail', '"E-mail"', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('adresse', '"Adresse"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tel', '"Téléphone"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('objet', '"Objet"', 'trim|required|xss_clean');   
        
        if ($this->form_validation->run() == false) {
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('contact');
            $content = $this->load->view('contact', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
        else
        {
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('contact');
            $content = $this->load->view('contact_valide', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
    }
    
    public function valide_contact_part()
    {
        $this->form_validation->set_rules('nom_part', '"Nom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenom_part', '"Prénom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mail_part', '"E-mail"', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('tel_part', '"Téléphone"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('objet_part', '"Objet"', 'trim|required|xss_clean');   
        
        if ($this->form_validation->run() == false) {
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('contact');
            $content = $this->load->view('contact', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
        else
        {
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('contact');
            $content = $this->load->view('contact_valide', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
    }
    
    public function send_form($to, $objet, $message)
    {
        
    }
    
}