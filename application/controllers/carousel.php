<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Carousel extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->slide();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function slide()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('carousel');
        $crud->set_subject('Slider');
        $crud->columns('img_carousel','titre_carousel', 'pos_carousel');

        $crud->set_field_upload('img_carousel','../Itechsup/assets/img/carousel');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>