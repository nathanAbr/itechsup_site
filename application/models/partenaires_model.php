<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partenaires_model extends CI_Model
{
    protected $table = "partenaires";
    
    public function get_partenaire()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->get()
                    ->result();
    }
}