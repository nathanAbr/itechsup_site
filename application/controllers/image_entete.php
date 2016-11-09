<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class image_entete extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();     
        $this->load->library('grocery_CRUD');    
    }
    
    public function index(){
        $this->image();
    }
 
    function _example_output($output = null)

    {
        $this->load->view('template.php',$output);    
    }
 
    function image()

    {
        $crud = new grocery_CRUD();
         
        $crud->set_theme('bootstrap');
        $crud->set_table('img_pages_head');
        $crud->set_subject('Images d\'entête');
        $crud->columns('titre_img_pages_head', 'lien_img_pages_head', 'id_pages');
        $crud->fields('titre_img_pages_head', 'lien_img_pages_head', 'id_pages', 'page_img_pages_head');
        $crud->display_as('titre_img_pages_head', 'Titre');
        $crud->display_as('lien_img_pages_head', 'Image');
        $crud->display_as('id_pages', 'Page correspondante');
        $crud->set_relation('id_pages', 'pages', "nom_page");
        $crud->set_field_upload('lien_img_pages_head','../Itechsup/assets/img/images_pages');
        $crud->unset_delete();
        $output = $crud->render();
         
        $this->_example_output($output);
    }
 
}
?>