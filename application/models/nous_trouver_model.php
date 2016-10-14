<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nous_trouver_model extends CI_Model
{
    protected $table = "trouver";
    
    public function get_trouver()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->get()
                    ->result();
    }
}