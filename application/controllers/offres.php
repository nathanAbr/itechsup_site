<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Offres extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->offre();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function offre()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('offres');
        $crud->set_subject('Offres');
        $crud->columns('titre_offre','description_offre');
        $crud->set_relation('id_type_formation', 'type_formations', "nom_type_formation");
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>