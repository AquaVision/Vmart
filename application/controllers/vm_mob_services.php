<?php

class vm_mob_services extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('vm_mob_model');
    }
    
    function get_items()
    {
        $items = $this->vm_mob_model->get_seller_products(21,'ACTIVE',5);
        echo $items;
    }
    
    function validate_user($user,$pass)
    {
        $value = $this->vm_mob_model->get_seller($user,$pass);
        echo $value;
    }
    
    

}

?>
