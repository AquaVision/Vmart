<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vmart extends CI_Controller {

    private $data = array();
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Land_model');
    } 
    
    public function index() {
        $this->data['top_items'] = $this->Land_model->get_top_items();
//        print_r($this->data['top_items']);
//        die();
        $this->load->view('landingpage',$this->data);
    }
    

    public function get_item_details($item_id)
    {
        $item = $this->Land_model->get_item_details($item_id);
        echo $item['item']->breif_description;
    }

    public function get_orders(){
        if (!islogedUser()){
            
            echo 'not logged in';
            
        }  else {
        
        $userid = getUserID();
        $this->load->model('product_model');
        $orders = $this->product_model->get_new_orders($userid);
        echo $orders;
        }
        
       
        
       }


}

        
       
        
?>
