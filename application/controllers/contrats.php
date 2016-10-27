<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Contrats extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->contrat();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function contrat()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('contrats');
        $crud->set_subject('Contrats');
        $crud->columns('nom_contrat','description_contrat');
         
        $output = $crud->render();
         
        $this->_example_output($output);
        
    }
 
}
?>