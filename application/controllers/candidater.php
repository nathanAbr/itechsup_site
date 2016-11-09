<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidater extends CI_Controller {

    function __construct(){
        parent::__construct();
        $data_mail = array();
    }

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
        $this->form_validation->set_rules('ville', '"Ville"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tel', '"Téléphone"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('cp', '"Code postal"', 'trim|required|xss_clean');   
        
        if ($this->form_validation->run() == false) {
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('candidater');
            $content = $this->load->view('candidater', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
        else
        {
            $data['header'] = $this->header->index();
            $data['img_pages'] = $this->images_pages->index('candidater');
            $content = $this->load->view('candidature_valide', $data, true);
            $this->load->view('content', array('content'=>$content));
            $this->send_form_user();
            $this->send_form_gestion();
        }
    }
    
    public function send_form_user()
    {
        $this->email->from('contact@itechsup.fr', 'Itechsup');
        $this->email->to($_POST['mail']);

        $this->email->subject('Demande de candidature');
        $message = $this->load->view('simple_mail', '',true);
        
        $this->email->message($message);
        $this->email->send();
    }
    
    public function send_form_gestion()
    {
        $extension_tab = array('PNG', 'JPG', 'PDF', 'png', 'jpg', 'pdf', 'jpeg');
        if(!empty($_POST['cv']) || !empty($_POST['lm'])){
        
            mkdir('uploads/'.$_POST['nom'].'_'.$_POST['prenom'].'_'.date('d-m-Y'), 777 ,TRUE);
            
            $extension = strtoupper(substr(strrchr($_FILES['cv']['name'], '.'), 1));
            
            if(in_array($extension, $extension_tab)){
                move_uploaded_file($_FILES['cv']['tmp_name'], 'uploads/'.$_POST['nom'].'_'.$_POST['prenom'].'_'.date('d-m-Y').'/cv-'.$_POST['nom'].'-'.$_POST['prenom'].'.'.$extension);
                $this->email->attach('uploads/'.$_POST['nom'].'_'.$_POST['prenom'].'_'.date('d-m-Y').'/cv-'.$_POST['nom'].'-'.$_POST['prenom'].'.'.$extension);
            }
            
            $extension = strtoupper(substr(strrchr($_FILES['lm']['name'], '.'), 1));
            
            if(in_array($extension, $extension_tab)){
                move_uploaded_file($_FILES['lm']['tmp_name'], 'uploads/'.$_POST['nom'].'_'.$_POST['prenom'].'_'.date('d-m-Y').'/lm-'.$_POST['nom'].'-'.$_POST['prenom'].'.'.$extension);
                $this->email->attach('uploads/'.$_POST['nom'].'_'.$_POST['prenom'].'_'.date('d-m-Y').'/lm-'.$_POST['nom'].'-'.$_POST['prenom'].'.'.$extension);
            }
        }
        
        
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        
        $this->email->from('contact@itechsup.fr', 'Itechsup');
        $this->email->to('informatique@sofra-recouvrements.com');
        $data_mail['nom'] = $_POST['nom'];
        $data_mail['prenom'] = $_POST['prenom'];
        $data_mail['tel'] = $_POST['tel'];
        $data_mail['ville'] = $_POST['ville'];
        $data_mail['cp'] = $_POST['cp'];
        $data_mail['adresse'] = $_POST['adresse'];
        $data_mail['mail'] = $_POST['mail'];
        $data_mail['diplome'] = $_POST['diplome'];
        $data_mail['sup'] = $_POST['inputComm'];
        $message = $this->load->view('mail_candidature', $data_mail, true);
        $this->email->subject('Demande de candidature');
        $this->email->message($message);

        $this->email->send();
    }
    
}