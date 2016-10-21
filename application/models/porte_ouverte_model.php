<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Porte_ouverte_model extends CI_Model
{
    protected $table = "portes_ouvertes";
    protected $table_date = "dates_portes_ouvertes";
    
    public function get_porte_ouverte()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->get()
                    ->result();
    }
    
    public function get_dates_porte_ouverte()
    {
        return $this->db->select('*')
                    ->from($this->table_date)
                    ->where('date_porte_ouverte > "'.date('Y-m-d').'"')
                    ->get()
                    ->result();
    }
}