<?php

class Item extends CI_Controller 
{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Item_model');
        $this->load->model('User_store_model');
    }
    
    function index()
    {
        redirect('landingpage');
    }
    
    function get_item($item_id)
    {
        $item_data = array();
        
        $item_data['item_data'] = $this->Item_model->get_seller($item_id);
        
        
        $item_data['item_images'] = $this->Item_model->get_images($item_id);
        
        $item_data['item_reviews'] = $this->Item_model->get_cutomer_reviews($item_id);
        $item_data['cover_images'] = $this->User_store_model->get_store_covers($item_data['item_data']["seller_data"]->userid);
        $item_data['sellerunique'] = $this->User_store_model->_getselleruniqe($item_data['item_data']["seller_data"]->userid);
        $item_data["seller_shop"] = $this->User_store_model->_getsellerShopname($item_data['item_data']["seller_data"]->userid);
//        print_r($item_data['item_images']);
//        die();
        
        $this->load->view('item_page',$item_data);
    }
}


?>
