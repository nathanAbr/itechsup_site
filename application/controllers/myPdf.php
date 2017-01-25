<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class MyPdf extends CI_Controller {
    
    public function index(){
        $this->form();
    }
    
    public function form()
    {
        $output = $this->load->view('form_pdf', '', true);
        $this->load->view('autre', array('output'=>$output));
    }
 
    function html_render()
    {
        $this->form_validation->set_rules('titre', '"Titre"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('sousTitre', '"Sous-titre"', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == false) {
            $output = $this->load->view('form_pdf', '', true);
            $this->load->view('autre', array('output'=>$output));
        }
        else
        {
            $this->load->model('formation_model');
            $_SESSION['titre'] = $_POST['titre'];
            $_SESSION['sousTitre'] = $_POST['sousTitre'];
            $_SESSION['secteur'] = $this->formation_model->get_type_formation();
            $_SESSION['formation'] = $this->formation_model->get_all_formation();
            $extension_tab = array('PNG', 'JPG');
            
            for($i=1;$i<=3;$i++){
            
                $extension = strtoupper(substr(strrchr($_FILES['img'.$i]['name'], '.'), 1));
            
                if(in_array($extension, $extension_tab)){
                    move_uploaded_file($_FILES['img'.$i]['tmp_name'], 'uploads/pdf/img/'.$_FILES['img'.$i]['name']);
                    $_SESSION['img'.$i] = 'uploads/pdf/img/'.$_FILES['img'.$i]['name'];
                }
            }
            
            $output = $this->load->view('html_pdf', '', true);
            $this->load->view('autre', array('output'=>$output));
        }
    }
    
    public function generate(){
        $this->load->library('pdf');
        $pdf = new Pdf();
        $pdf->load_view('html_pdf');
        $pdf->render();
        $pdf->stream("ficheComm.pdf");
        $session_destroy('titre');
        $session_destroy('sousTitre');
        $session_destroy('img1');
        $session_destroy('img2');
        $session_destroy('img3');
    }
 
}
?>