<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portes_ouvertes extends CI_Controller {

    function __construct(){
        parent::__construct();$this->load->model('porte_ouverte_model');
        $data = array();
        $data_mail = array();
    }

	public function index()
	{
		$this->porte_ouverte();
	}
    
    public function porte_ouverte()
	{
        $data['portes_ouvertes'] = $this->porte_ouverte_model->get_porte_ouverte();
        $data['date_porte_ouverte'] = $this->porte_ouverte_model->get_dates_porte_ouverte();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('porte_ouverte');
        $content = $this->load->view('portes_ouvertes', $data, true);
        $this->load->view('content', array('content'=>$content));
        
	}
    
    public function valide_form()
    {
        $this->form_validation->set_rules('nom', '"Nom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenom', '"Prénom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mail', '"E-mail"', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('subject', '"Date"', 'trim|required|xss_clean');   
        
        if ($this->form_validation->run() == false) {
            $data['portes_ouvertes'] = $this->porte_ouverte_model->get_porte_ouverte();
            $data['date_porte_ouverte'] = $this->porte_ouverte_model->get_dates_porte_ouverte();
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('portes_ouvertes');
            $content = $this->load->view('portes_ouvertes', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
        
        else
        {
            $data['portes_ouvertes'] = $this->porte_ouverte_model->get_porte_ouverte();
            $data['date_porte_ouverte'] = $this->porte_ouverte_model->get_dates_porte_ouverte();
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('portes_ouvertes');
            $data['valide_form'] = 'Votre demande à bien été prise en compte.';
            $content = $this->load->view('portes_ouvertes', $data, true);
            $this->load->view('content', array('content'=>$content));
            $this->send_form();
        }
    }
    
    public function send_form()
    {
        $this->email->from('contact@itechsup.fr', 'Itechsup');
        $this->email->to('informatique@sofra-recouvrements.com');
        $this->email->cc($_POST['mail']);

        $this->email->subject('Participation à la porte ouverte du '.$_POST['subject']);
        $data_mail['nom'] = $_POST['nom'];
        $data_mail['prenom'] = $_POST['prenom'];
        $data_mail['mail'] = $_POST['mail'];
        $data_mail['sup'] = $_POST['inputComm'];
        $data_mail['subject'] = 'porte ouverte';
        $data_mail['date'] = $_POST['subject'];
        $message = $this->load->view('mail', $data_mail, true);
        
        $this->email->message($message);
        $this->email->send();
    }
    
}