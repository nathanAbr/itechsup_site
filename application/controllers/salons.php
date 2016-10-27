<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Salons extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->salon();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function salon()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('salons');
        $crud->set_subject('Salons');
        $crud->columns('nom_salon','date_salon');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>