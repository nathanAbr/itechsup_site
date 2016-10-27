<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Types_formations extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->type_form();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function type_form()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('type_formations');
        $crud->set_subject('Domaines de formations');
        $crud->columns('nom_type_formation','secteur_type_formation');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>