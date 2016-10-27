<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Profil extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function oui()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('utilisateurs');
        $crud->set_subject('Profils utilisateur');
        $crud->columns('nom_utilisateur','prenom_utilisateur');
         
        $output = $crud->render();
         
        $this->_example_output($output);
        
    }
    
    function non(){
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('utilisateurs');
        $crud->where('log_utilisateur = "'.$_SESSION['member-id'][0]->log_utilisateur.'"');
        $crud->set_subject('Profils utilisateur');
        $crud->columns('nom_utilisateur','prenom_utilisateur');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>