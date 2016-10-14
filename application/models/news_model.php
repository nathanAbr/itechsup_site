<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model
{
    protected $table = "events";
    
    public function get_news_accueil()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('date_event > "'.date("Y-m-d").'"')
                    ->order_by('date_event', 'asc')
                    ->limit(0, 3)
                    ->get()
                    ->result();
    }
    
    public function get_news_page()
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('date_event > "'.date("Y-m-d").'"')
                    ->order_by('date_event', 'asc')
                    ->get()
                    ->result();
    }
}