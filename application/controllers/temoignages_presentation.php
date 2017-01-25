<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Temoignages_presentation extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
 
    public function index(){
        $this->temoign_presentation();
    }
 
    function _example_output($output = null)
    {
        $this->load->view('template.php',$output);    
    }
 
    function temoign_presentation()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('temoignages_presentation');
        $crud->set_subject('Témoignages de Mr HERVE');
        $crud->columns('nom_temoignage_presentation','text_temoignage_presentation', 'img_temoignage_presentation');
        $crud->display_as('nom_temoignage_presentation', 'Nom')
                ->display_as('text_temoignage_presentation', 'Témoignage')
                ->display_as('img_temoignage_presentation', 'Photo');
        $crud->set_field_upload('img_temoignage_presentation','../Itechsup/assets/img/images_temoignage/presentation');
         
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>