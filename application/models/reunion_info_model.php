<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reunion_info_model extends CI_Model
{
    protected $table = "reunions_informations";
    protected $table_date = "dates_reunion_informations";
    
    public function get_reunion_info()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->get()
                    ->result();
    }
    
    public function get_dates_reunion_info()
    {
        return $this->db->select('*')
                    ->from($this->table_date)
                    ->where('date_reunion_information > "'.date('Y-m-d').'"')
                    ->get()
                    ->result();
    }
}