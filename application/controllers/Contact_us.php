<?php

class Contact_us extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    private $seller_data = array();
    
    function index()
    {
//        print_r($this->seller_data['seller_contacts']);
//        echo "<br/>";
//
//        print_r($this->seller_data['seller_phones']);
//        echo "<br/>";
//        die();
        $this->load->view('contact_us',$this->seller_data);
    }
    
    function get_data($seller_id)
    {
        $sql = "SELECT * FROM store WHERE userid = ? AND status = 'ACTIVE'";
        $query = $this->db->query($sql,array($seller_id));
        
        $sql_phones = "SELECT * FROM seller_phones WHERE userid = ?";
        $q_phones = $this->db->query($sql_phones,array($seller_id)); ;
        
        $sql_social = "SELECT * FROM seller_socialmedia_data WHERE userid = ?";
        $q_social = $this->db->query($sql_social,array($seller_id));
        
        $seller_email_data = array();
        if($query->num_rows() == 1)
        {
            $seller_email_data = $query->row();
        }
        $this->seller_data['seller_contacts'] = $seller_email_data;
        
        $social_media_data = array();
        if($q_social->num_rows() > 0)
        {
            foreach($q_social->result() as $media)
            {
                $social_media_data[] = $media;
                
            }
        }
        $this->seller_data['seller_media'] = $social_media_data;
        
        $seller_phone_data = array();
        if($q_phones->num_rows() > 0)
        {
            foreach($q_phones->result() as $phone)
            {
                $seller_phone_data[] = $phone;
            }
        }
        $this->seller_data['seller_phones'] = $seller_phone_data;
        
        $this->index();    
    }
    
    function insert_feedback()
    {
        $user_email = $this->input->post('customer_email');
        $user_feedback = $this->input->post('customer_feedback');
        
//        echo $user_email."</br>";
//        echo $user_feedback;
        
    }

}

?>
