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
        $crud->columns('nom_formation','titre_formation', 'id_type_formation', 'img_formation');
        $crud->display_as('nom_formation','Nom de la formation')
                ->display_as('titre_formation','Titre RNCP/Diplôme')
                ->display_as('id_type_formation','Catégorie')
                ->display_as('img_formation','Image');
        $crud->set_relation('id_type_formation', 'type_formations', "nom_type_formation");

        $crud->set_field_upload('img_formation','../Itechsup/assets/img/icones/icones_formations');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>