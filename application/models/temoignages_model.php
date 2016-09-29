<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Temoignages_model extends CI_Model
{
    protected $table_type = "autres_temoignages";
    protected $table = "temoignages";
    
    public function get_temoignages_autres($pages)
    {
        return $this->db->select('*')
                    ->from($this->table_type)
                    ->where('id_type_temoignages = "'.$pages.'"')
                    ->get()
                    ->result();
    }
    
    public function get_temoignages_formations($pages)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('id_formations = "'.$pages.'"')
                    ->get()
                    ->result();
    }
}