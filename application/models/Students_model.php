<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getStudents()
    {
        $this->db->select('idStudents,fname,lname,email,username');
        $this->db->from('students');
        $this->db->join('users','students.idUsers=users.idUsers','left');
        return $this->db->get()->result_array();
    }

    public function add_student($insert_data)
    {
        $this->db->insert('students',$insert_data);
        return $this->db->affected_rows();
    }
    public function get_chosen($id)
    {
        $this->db->select('*');
        $this->db->from('students');
        $this->db->where('idStudents',$id);
        return $this->db->get()->result_array();
    }
    public function delete_student($id)
    {
        $this->db->where('idStudents',$id);
        $this->db->delete('students');
    }
    public function edit_student($update_data,$id)
    {
        $this->db->where('idStudents',$id);
        $this->db->update('students',$update_data);
        return $this->db->affected_rows();
    }
}