<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_formateur extends CI_Controller {

	public function index()
	{
		$this->contacter();
	}
    
    public function contacter()
	{
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('contact');
        $content = $this->load->view('contact_formateur', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
     public function valide_contact_formateur()
    {
        $this->form_validation->set_rules('nom', '"Nom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenom', '"Prénom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mail', '"E-mail"', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('tel', '"Téléphone"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mess', '"Message"', 'trim|required|xss_clean');   
        
        if ($this->form_validation->run() == false) {
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('contact');
            $content = $this->load->view('contact_formateur', $data, true);
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

    public function send_form()
    {
        $data = array();
        $this->email->from('contact@itechsup.fr', 'Itechsup');
        $this->email->to('administration@itechsup.fr');
        $this->email->subject('Demande de contact (Formateur)');
        $data['nom'] = $_POST['nom'];
        $data['prenom'] = $_POST['prenom'];
        $data['tel'] = $_POST['tel'];
        $data['mail'] = $_POST['mail'];
        $data['sup'] = $_POST['mess'];
        
        $message = $this->load->view('simple_mail_contact', $data,true);
        
        $this->email->message($message);
        $this->email->send();
    }
}