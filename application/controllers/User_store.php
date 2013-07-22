<?php


class User_store extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
        $this->load->view('user_store');
    }

}

?>
