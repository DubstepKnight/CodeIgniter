<?php
    class Test extends CI_Controller
    {
        function first()
        {
            echo 'This is the first method is Test-Controller';
        }
        function second()
        {
            $data['info']="This comes from second-method of Test-contoller";
            $this->load->view('test/second', $data);
        }
        function third()
        {
            $this->load->model('Test_model');
            $data['message']=$this->Test_model->say_something();
            $data['students']=$this->Test_model->get_names();
            $this->load->view('test/third',$data);
        }
        function index()
        {
            echo 'This is the index-method of Test-Controller';
        }
    }
?>