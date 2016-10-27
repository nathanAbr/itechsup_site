<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Date_po extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->po();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function po()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('dates_portes_ouvertes');
        $crud->set_subject('Dates portes ouvertes');
        $crud->columns('date_porte_ouverte', 'id_portes_ouvertes');
        $crud->set_relation('id_portes_ouvertes', 'portes_ouvertes', "titre_porte_ouverte");
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>