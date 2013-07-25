<?php


class About_us extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    private $seller_data = array();
    
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
        $sql = "SELECT aboutus FROM store WHERE userid = ? AND status = 'ACTIVE'";
        $query = $this->db->query($sql,array($seller_id));
        $this->seller_data['seller_id'] = $seller_id;
        
        if($query->num_rows() == 1)
        {
            $this->seller_data['aboutus'] = $query->row();
        }
        
        $this->load->view('about_us',  $this->seller_data);
        
    }

}

?>
