<?php


class User_store extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_store_model');
    }
    
    private $user_store_data = array();
    
    function index()
    {
        $this->load->view('landingpage');
    }
    
    function get_data($seller_id)
    {
        $this->User_store_model->get_seller_data($seller_id);
        $this->user_store_data['cover_images'] = $this->User_store_model->get_store_covers($seller_id);
        $this->user_store_data['all_products'] = $this->User_store_model->get_seller_products($seller_id,'ACTIVE',8);
        $this->user_store_data['featured_products'] = $this->User_store_model->get_featured_products($seller_id,'ACTIVE','ACTIVE',4);
        $this->user_store_data['new_products'] = $this->User_store_model->get_new_arrivals($seller_id,'ACTIVE',8);
        
        $this->load->view('user_store',$this->user_store_data);
        
    }

}

?>
