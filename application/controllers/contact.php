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
        $this->form_validation->set_rules('tel', '"Téléphone"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('objet', '"Objet"', 'trim|required|xss_clean');   
        
        if ($this->form_validation->run() == false) {
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('contact');
            $data['active_pro'] = "active";
            $data['active_part'] = "";
            $content = $this->load->view('contact', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
        else
        {
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('contact');
            $content = $this->load->view('contact_valide', $data, true);
            $this->load->view('content', array('content'=>$content));
            $this->send_form();
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
            $data['active_pro'] = "";
            $data['active_part'] = "active";
            $content = $this->load->view('contact', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
        else
        {
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('contact');
            $content = $this->load->view('contact_valide', $data, true);
            $this->load->view('content', array('content'=>$content));
            $this->send_form_part();
        }
    }
    
    public function send_form()
    {
        $data = array();
        $this->email->from('contact@itechsup.fr', 'Itechsup');
        $this->email->to('informatique@sofra-recouvrements.com');
        $this->email->subject('Demande de contact (Professionnel)');
        $data['nom'] = $_POST['nom'];
        $data['prenom'] = '';
        $data['tel'] = $_POST['tel'];
        $data['mail'] = $_POST['mail'];
        $data['subject'] = $_POST['objet'];
        $data['sup'] = $_POST['comm'];
        
        $message = $this->load->view('simple_mail_contact', $data,true);
        
        $this->email->message($message);
        $this->email->send();
    }
    
    public function send_form_part()
    {
        $data = array();
        $this->email->from('contact@itechsup.fr', 'Itechsup');
        $this->email->to('informatique@sofra-recouvrements.com');
        $this->email->subject('Demande de contact');
        $data['nom'] = $_POST['nom_part'];
        $data['prenom'] = $_POST['prenom_part'];
        $data['tel'] = $_POST['tel_part'];
        $data['mail'] = $_POST['mail_part'];
        $data['subject'] = $_POST['objet_part'];
        $data['sup'] = $_POST['comm_part'];
        
        $message = $this->load->view('simple_mail_contact', $data,true);
        
        $this->email->message($message);
        $this->email->send();
    }
    
}