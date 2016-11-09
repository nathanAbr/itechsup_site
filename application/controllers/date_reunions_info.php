<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Date_reunions_info extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->date_ri();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function date_ri()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('dates_reunion_informations');
        $crud->set_subject('Dates Réunions d\'informations');
        $crud->columns('date_reunion_information', 'id_reunion_information');
        $crud->set_relation('id_reunion_information', 'reunions_informations', "titre_reunion_information");
         
        $crud->display_as('id_reunion_information','Réunion concernée ?');

        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>