<?php
    class Users extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            if(!empty($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {

            }
            else
            {
                //$this->load->view('students/permission_denied');
                redirect('students/permission_denied');
            }

        }

        function show_users()
        {
            $this->load->model('Users_model');
            $data['users']=$this->Users_model->get_users();
            $data['page']="users/show_users";
            //$this->load->view('users/show_users',$data);
            $this->load->view('menu/content',$data);
        }
        function add_form()
        {
            $data['page']='users/add_form';
            $this->load->view('menu/content',$data);        
        }
        function add_user()
        {
            print_r($this->input->post());
            $this->load->model('Users_model');
            $hashedPassword=password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $insert_data=array(
                "idUsers"=>$this->input->post('idUsers'),
                "username"=>$this->input->post('username'),
                "password"=>$hashedPassword,
                "usergroup"=>$this->input->post('usergroup'),
            );
            $result=$this->Users_model->add_user($insert_data);
            $data['page']=$result ? 'users/success' : 'users/error';
            $this->load->view('menu/content',$data);
        }
    }
    
?>