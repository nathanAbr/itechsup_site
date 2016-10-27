<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Events extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->event();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function event()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('events');
        $crud->set_subject('Evènements');
        $crud->columns('titre_event','date_event');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>