<?php

class My_items extends CI_Controller 
{

    public $select_data = array();
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Add_item_model');
        $this->load->library('form_validation');
        
        $this->select_data['seller_categories'] = $this->Add_item_model->get_seller_categories(getUserID(),'ACTIVE');
        $this->select_data['vmart_categories'] = $this->Add_item_model->get_vmart_categories();

    }
    
    public function index() 
    {   
        $this->load->view('my_items',$this->select_data);
    }
    
    public function add_item()
    {
        $cat_id = $this->Add_item_model->get_cat_id($this->input->post('category'));
        $vmart_cat_id = $this->Add_item_model->get_vcat_id($this->input->post('vcategory'));
        
        $newitemdata = array(
            'cat_id'        => $cat_id['cat_id']->cat_id,
            'userid'        => getUserID(),
            'title'         => $this->input->post('title'),
            'similar'       => $this->input->post('similar'),
            'price'         => $this->input->post('price_no'),
            'price_currancy'=> $this->input->post('price_currency'),
            'Qty'           => $this->input->post('quantity'),
            'breif_description' => $this->input->post('description'),
            'complete_description' => $this->input->post('more_info'),
            'item_created'  => get_date_time(),
            'rating'        => 5,
            'status'        => 'ACTIVE',
            'vmartCatcatid' => $vmart_cat_id['catid']->catid , 
        );
        $this->Add_item_model->add_item($newitemdata);
        
    }
}


?>
