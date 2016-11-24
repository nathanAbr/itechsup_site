<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rentres_model extends CI_Model
{
    protected $table = "rentres";
    
    public function get_rentres()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->get()
                    ->result();
    }
    
}