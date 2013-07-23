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
        $this->User_store_model->get_seller_data($seller_id);
        $this->User_store_model->get_seller_products($seller_id,'ACTIVE');
        $this->User_store_model->get_featured_products($seller_id,'ACTIVE');
        $this->User_store_model->get_new_arrivals($seller_id,'ACTIVE');
        
    }

}

?>
