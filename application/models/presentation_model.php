<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Presentation_model extends CI_Model
{
    protected $table = "presentation";
    
    public function get_presentation()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->get()
                    ->result();
    }
}