<?php


class User_store extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_store_model');
    }
    
    private $user_store_data = array();
    
    function index()
    {
        redirect("Vmart");
    }
    
    function seller($sellerid){
        $userid = $this->User_store_model->isSellerExistes($sellerid);
        if($userid > 0){
            $this->get_data($userid);
        }else{
            show_404();
        }
    }
    
    function get_data($seller_id)
    {
        $this->user_store_data['sellerunique'] = $this->User_store_model->_getselleruniqe($seller_id);
        $this->user_store_data['seller_id'] = $seller_id;
        $this->user_store_data["seller_shop"] = $this->User_store_model->_getsellerShopname($seller_id);
        $this->user_store_data['cover_images'] = $this->User_store_model->get_store_covers($seller_id);
        $this->user_store_data['all_products'] = $this->User_store_model->get_seller_products($seller_id,'ACTIVE',8);
        $this->user_store_data['featured_products'] = $this->User_store_model->get_featured_products($seller_id,'ACTIVE','ACTIVE',4);
        $this->user_store_data['new_products'] = $this->User_store_model->get_new_arrivals($seller_id,'ACTIVE',8);
        
        $this->load->view('user_store',$this->user_store_data);        
    }

}

?>
