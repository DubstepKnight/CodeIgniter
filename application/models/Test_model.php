<?php
    class Test_model extends CI_Model
    {
        function say_something()
        {
            $info="This is from Test_model";
            return $info;
        }
        function get_names()
        {
            $names=array(
                array("fn"=>'Lisa'),
                array("fn"=>'Jim'),
                array("fn"=>'Bob')
            );
            return $names;
        }
    }
    
?>