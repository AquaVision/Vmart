<?php

class Vmart_alt extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Land_model');
        
    }
    
    public function index() {
        //$this->load->view('vmart_alt');
    }
    
    public function get_item_details($item_id)
    {
        $item = $this->Land_model->get_item_details($item_id);
        echo $item['item']->breif_description;
    }
    
    function user_store_item()
    {
        $this->load->view('user_store_item');
    }

}

?>
