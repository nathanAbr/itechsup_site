<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide_model extends CI_Model
{
    protected $table = "carousel";
    
    public function get_slider()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->order_by('pos_carousel', 'asc')
                    ->get()
                    ->result();
    }
}