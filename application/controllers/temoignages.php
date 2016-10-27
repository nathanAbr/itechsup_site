<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Temoignages extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
 
    public function index(){
        $this->temoign();
    }
 
    function _example_output($output = null)
    {
        $this->load->view('template.php',$output);    
    }
 
    function temoign()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('temoignages');
        $crud->set_subject('Témoignages');
        $crud->columns('nom_temoignage','text_temoignage');
        $crud->set_relation('id_type_formation', 'type_formations', "nom_type_formation");
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>