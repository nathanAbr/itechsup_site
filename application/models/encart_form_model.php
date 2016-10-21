<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Encart_form_model extends CI_Model
{
    public function get_temoignages_presentation($table)
    {
        return $this->db->select('*')
                    ->from($table)
                    ->get()
                    ->result();
    }