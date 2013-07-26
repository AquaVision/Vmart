<?php

class Item extends CI_Controller 
{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Item_model');
    }
    
    function index()
    {
        redirect('landingpage');
    }
    
    function get_item($item_id)
    {
        $item_data = array();
        
        $item_data['item_data'] = $this->Item_model->get_seller($item_id);
//        echo($item_data['seller_data']->userid);
//        die();
        $item_data['item_images'] = $this->Item_model->get_images($item_id);
        
        $item_data['item_reviews'] = $this->Item_model->get_cutomer_reviews($item_id);
        
//        print_r($item_data['item_images']);
//        die();
        
        $this->load->view('item_page',$item_data);
    }
}


?>
