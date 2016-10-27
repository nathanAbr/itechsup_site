<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Presentation extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->present();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function present()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('presentation');
        $crud->set_subject('Présentation');
        $crud->columns('titre_presentation','text_presentation');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>