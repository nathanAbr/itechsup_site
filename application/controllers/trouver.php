<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Trouver extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->trouve();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function trouve()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('trouver');
        $crud->set_subject('Nous trouver');
        $crud->columns('tel_trouver','mail_trouver');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>