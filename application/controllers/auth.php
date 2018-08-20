<?php
class auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
    }
            
    function  login()
    {
        if(isset($_POST['submit'])){
           
            //prosess yang gampang
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil= $this->model_operator->login($username,$password);
            echo $hasil;
        }
        else{
            $this->load->view('form_login');
        }
    }
    
        

}

