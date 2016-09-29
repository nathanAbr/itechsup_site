<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formation_model extends CI_Model
{
    protected $table_type = "type_formations";
    protected $table = "formations";
    
    public function get_type_formation()
    {
        return $this->db->select('*')
                    ->from($this->table_type)
                    ->get()
                    ->result();
    }
    
    public function get_formation($url)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('id_type_formation = "'.$url.'"')
                    ->get()
                    ->result();
    }
}