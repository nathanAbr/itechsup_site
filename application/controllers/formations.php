<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Formations extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->form();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function form()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('formations');
        $crud->set_subject('Formations');
        $crud->columns('nom_formation','titre_formation');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>