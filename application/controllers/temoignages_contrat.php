<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Temoignages_contrat extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
 
    public function index(){
        $this->temoign_contrat();
    }
 
    function _example_output($output = null)
    {
        $this->load->view('template.php',$output);    
    }
 
    function temoign_contrat()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('temoignages_contrat');
        $crud->set_subject('Témoignages des contrats');
        $crud->columns('nom_temoignage_contrat','text_temoignage_contrat', 'id_contrat');
        $crud->set_relation('id_contrats', 'contrats', "nom_contrat");
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>