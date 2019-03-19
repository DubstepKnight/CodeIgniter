<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPassword($givernUsername)
    {
        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('username', $givernUsername);
        return $this->db->get()->row('password');
    }
}
