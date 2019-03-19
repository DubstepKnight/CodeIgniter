<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Students extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Students_model');
        }

        function permission_denied()
        {
            $data['page']='students/permission_denied';
            $this->load->view('menu/content',$data);
        }

        function show_students()
        {
            $data['students']=$this->Students_model->getStudents();
            $data['page']='students/show_students';
            $this->load->view('menu/content',$data);
        }
        function add_form()
        {
            $data['page']='students/add_form';
            $this->load->view('menu/content',$data);
        }
        function add_student()
        {
            print_r($this->input->post());
            $insert_data=array(
                "idUsers" => $this->input->post('id'),
                "fname" => $this->input->post('fn'),
                "lname" => $this->input->post('ln'),
                "email" => $this->input->post('em')
            );
            $result=$this->Students_model->add_student($insert_data);
            if ($result==1)
            {
                $data['message']="You have added a new student";
            }
            else 
            {
                $data['message']="Something went wrong!";
            }
            $data['page']='students/add_info';
            $this->load->view('menu/content',$data);
        }
        function show_delete($id)
        {
            echo $id;
            $data['chosen_student']=$this->Students_model->get_chosen($id);
            $data['page']='students/delete_student';
            $this->load->view('menu/content',$data);
        }
        function delete_student($id)
        {
            $this->Students_model->delete_student($id);
            redirect('students/show_students');
        }
        function show_edit($id)
        {
            echo $id;
            $data['student']=$this->Students_model->get_chosen($id);
            $data['current_id']=$id;
            $data['page']='students/edit_form';
            $this->load->view('menu/content',$data);
        }
        function edit_student()
        {
            //print_r($this->input->post());
            $id=$this->input->post('current_id');
            $update_data=array(
                "idUsers" => $this->input->post('id'),
                "fname" => $this->input->post('fn'),
                "lname" => $this->input->post('ln'),
                "email" => $this->input->post('em'),
                "idStudents" => $this->input->post('idStudents')
            );
            $result=$this->Students_model->edit_student($update_data, $id);
            if ($result==1)
            {
                //$data['message']="You have edited the student";
                redirect('students/show_students');
            }
            else 
            {
                $data['message']="Something went wrong!";
                $data['page']='students/add_info';
                $this->load->view('menu/content',$data);
            }
            
        }
    }    
    
    
