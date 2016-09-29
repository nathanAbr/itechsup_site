<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class images_pages_model extends CI_Model
{
    protected $table = "img_pages_head";
    
    public function get_images($pages)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('page_img_pages_head = "'.$pages.'"')
                    ->get()
                    ->result();
    }
}