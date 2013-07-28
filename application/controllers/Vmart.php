<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vmart extends CI_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('Land_model');
    }

    public function index() {
         $data['top_items'] = $this->Land_model->get_top_items();
         $data['latestitems'] = $this->Land_model->get_latest_Items();
         $data['topsellers'] = $this->Land_model->get_top_sellers();
        // print_r($data['top_items']);
       // die();
        $this->load->view('landingpage',  $data);
    }
    
    
    

    public function get_item_details($item_id)
    {
        $item = $this->Land_model->get_item_details($item_id);
        echo $item['item']->breif_description;
    }

    


}

?>
