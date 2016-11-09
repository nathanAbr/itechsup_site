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
        $crud->edit_fields('nom_utilisateur','prenom_utilisateur','log_utilisateur', 'mail_utilisateur', 'admin_utilisateur');
        $crud->add_fields('nom_utilisateur','prenom_utilisateur','log_utilisateur', 'mail_utilisateur', 'admin_utilisateur', 'mdp_utilisateur');
        $crud->change_field_type('mdp_utilisateur', 'password');
        $crud->callback_before_insert(array($this,'encrypt_password'));
         
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
        $crud->edit_fields('nom_utilisateur','prenom_utilisateur','log_utilisateur', 'mail_utilisateur');
        
        $output = $crud->render();
        $this->_example_output($output);
    }
    
    function forget_pass(){
        $crud = new grocery_CRUD();
    
        $crud->set_theme('bootstrap');
        $crud->set_table('utilisateurs');
        $crud->set_subject('Mot de passe oublié');
        $crud->columns('nom_utilisateur','prenom_utilisateur');
        $crud->edit_fields('mdp_utilisateur');
        $crud->change_field_type('mdp_utilisateur', 'password');
        $crud->callback_before_update(array($this,'encrypt_password'));
        $crud->unset_add();
        
        $output = $crud->render();
        $this->_example_output($output);
    }
    
    function encrypt_password($post_array){
        $post_array['mdp_utilisateur'] = hash('md5', $post_array['mdp_utilisateur']);
        return $post_array;
    }
 
}
?>