<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Portes_ouvertes extends CI_Controller {
 
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
        $crud->set_table('portes_ouvertes');
        $crud->set_subject('Portes ouvertes');
        $crud->columns('titre_porte_ouverte','description_porte_ouverte', 'img_porte_ouverte');
        $crud->display_as('titre_porte_ouverte', 'Titre')
                ->display_as('description_porte_ouverte', 'Description')
                ->display_as('img_porte_ouverte', 'Image');
        $crud->set_field_upload('img_porte_ouverte','../Itechsup/assets/img/porte_ouverte');
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>