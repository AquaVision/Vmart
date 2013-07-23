<?php


class About_us extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    private $seller_data = array();
    
    function index()
    {
        //print_r($this->seller_data);
        //echo $this->seller_data['aboutus']->aboutus;
        //die();
        $this->load->view('about_us',  $this->seller_data);
    }
    
    function get_data($seller_id)
    {
        $sql = "SELECT aboutus FROM store WHERE userid = ? AND status = 'ACTIVE'";
        $query = $this->db->query($sql,array($seller_id));
        
        if($query->num_rows() == 1)
        {
            $this->seller_data['aboutus'] = $query->row();
        }
        
        $this->index();
        
    }

}

?>