<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offres_model extends CI_Model
{
    protected $table = "offres";
    
    public function get_offres()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->get()
                    ->result();
    }
    
}