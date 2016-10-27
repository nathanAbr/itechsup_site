<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Reunions_info extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->ri();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function ri()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('reunions_informations');
        $crud->set_subject('Réunions d\'informations');
        $crud->columns('titre_reunion_information','description_reunion_information');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>