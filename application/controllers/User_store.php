<?php


class User_store extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_store_model');
    }
    
    private $user_store_data = array();
    
    function index()
    {
        $this->load->view('user_store');
    }
    
    function get_data($seller_id)
    {
        
    }

}

?>
