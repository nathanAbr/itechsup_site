<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reunion_info_model extends CI_Model
{
    protected $table = "portes_ouvertes";
    protected $table_date = "dates_reunions_informations";
    
    public function get_reunion_info()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->get()
                    ->result();
    }
    
    public function get_dates_reunion_info($ri)
    {
        return $this->db->select('*')
                    ->from($this->table_date)
                    ->where('id_reunions_informations = "'.$ri.'"')
                    ->get()
                    ->result();
    }
}