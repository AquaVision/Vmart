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
        
        $this->load->view('item_page',$item_data);
    }
}


?>
