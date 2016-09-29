<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contrats_model extends CI_Model
{
    protected $table = "contrats";
    
    public function get_contrat($url)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('id_contrat = "'.$url.'"')
                    ->get()
                    ->result();
    }
    
    public function get_contrat_header()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->get()
                    ->result();
    }
}