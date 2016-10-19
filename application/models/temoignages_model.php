<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Temoignages_model extends CI_Model
{
    protected $table1 = "temoignages_presentation";
    protected $table = "temoignages";
    protected $table2 = "temoignages_contrat";
    
    public function get_temoignages_presentation()
    {
        return $this->db->select('*')
                    ->from($this->table1)
                    ->get()
                    ->result();
    }
    
    public function get_temoignages_formations($pages)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('id_type_formation = "'.$pages.'"')
                    ->get()
                    ->result();
    }
    
    public function get_temoignages_contrats($pages)
    {
        return $this->db->select('*')
                    ->from($this->table2)
                    ->where('id_contrats = "'.$pages.'"')
                    ->get()
                    ->result();
    }
}