<?php

class Auth extends CI_Controller{
    
    function index(){
        
    }
    
    function SignIn(){
        
        
    }
    
    function SignUp(){
        
        $this->load->model('membership_model');
        $this->membership_model->create_member();
       
    }
    
}

?>
