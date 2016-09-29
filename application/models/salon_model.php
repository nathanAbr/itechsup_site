<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Salon_model extends CI_Model
{
    protected $table = "salons";
    
    public function get_salon()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->get()
                    ->result();
    }
}