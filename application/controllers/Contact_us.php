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
        $this->load->view('landingpage');
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
        $this->seller_data['seller_id'] = $seller_id;
        
        $this->load->view('contact_us',$this->seller_data);  
    }
    
    function get_seller_email($seller_id)
    {
        $sql = "SELECT email_for_meesage FROM store WHERE userid = ? ";
        $query = $this->db->query($sql , $seller_id);
        
        $seller_email = "";
        
        if($query->num_rows() == 1 )
        {
            $seller_email = $query->row();
        }

        return $seller_email;
    }
    
    function send_feedback()
    {
        $user_feedback = $this->input->post('customer_email_subject')."</br></br>".$this->input->post('customer_feedback')."</br></br>From ".$this->input->post('customer_email');
        $email_subject = "You have a New Message from VMart"; 
        $seller_email = $this->get_seller_email($this->input->post('seller_id'));
        
//        echo $user_feedback."</br>";
//        echo $email_subject."</br>";
//        echo $this->input->post('seller_id');
        
        sendVmartEmail($seller_email->email_for_meesage,$email_subject,$user_feedback);
        $this->load->view('contact_us',$this->input->post('seller_id'));
        
    }

}

?>
