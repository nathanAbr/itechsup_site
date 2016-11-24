<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reunions_infos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('reunion_info_model');
        $data = array();
        $data_mail = array();
    }

	public function index()
	{
		$this->reunion_info();
	}
    
    public function reunion_info()
	{
        $data['reunion_info'] = $this->reunion_info_model->get_reunion_info();
        $data['date_reunion_info'] = $this->reunion_info_model->get_dates_reunion_info();
        $data['header'] = $this->header->index();
        $data['img_pages'] = $this->images_pages->index('reunion_info');
        $content = $this->load->view('reunion_info', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
    public function valide_form()
    {
        $this->form_validation->set_rules('nom', '"Nom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenom', '"Prénom"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mail', '"E-mail"', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('subject', '"Date"', 'trim|required|xss_clean');   
        
        if ($this->form_validation->run() == false) {
            $data['reunion_info'] = $this->reunion_info_model->get_reunion_info();
            $data['date_reunion_info'] = $this->reunion_info_model->get_dates_reunion_info();
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('reunion_info');
            $content = $this->load->view('reunion_info', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
        
        else
        {
            $data['reunion_info'] = $this->reunion_info_model->get_reunion_info();
            $data['date_reunion_info'] = $this->reunion_info_model->get_dates_reunion_info();
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('reunion_info');
            $data['valide_form'] = 'Votre demande à bien été prise en compte.';
            $content = $this->load->view('reunion_info', $data, true);
            $this->load->view('content', array('content'=>$content));
            $this->send_form();
        }
    }
    
    public function send_form()
    {
        $this->email->from('contact@itechsup.fr', 'Itechsup');
        $this->email->to('administration@itechsup.fr');
        $this->email->cc($_POST['mail']);

        $this->email->subject('Participation à la réunion d\'information du '.$_POST['subject']);
        $data_mail['nom'] = $_POST['nom'];
        $data_mail['prenom'] = $_POST['prenom'];
        $data_mail['mail'] = $_POST['mail'];
        $data_mail['sup'] = $_POST['inputComm'];
        $data_mail['subject'] = 'réunion d\'information';
        $data_mail['date'] = $_POST['subject'];
        $message = $this->load->view('mail', $data_mail, true);
        
        $this->email->message($message);
        $this->email->send();
    }
    
}