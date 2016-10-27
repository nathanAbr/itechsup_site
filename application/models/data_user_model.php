<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_user_model extends CI_Model
{
    protected $table = "utilisateurs";
    
    public function verif($user, $mdp)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('log_utilisateur = "'.$user.'" AND mdp_utilisateur = "'.$mdp.'"')
                    ->get()
                    ->result();
    }
}