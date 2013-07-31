<?php

class vm_mob_model extends CI_Model  {
 
    function __construct() {
        
    }
    
    function get_seller_products($seller_id,$status,$limit)
    {
        $sql = "SELECT * FROM store_item WHERE userid = ? AND status = ? AND Qty>0 ORDER BY item_created DESC LIMIT ?";
        $query = $this->db->query($sql,array($seller_id,$status,$limit));
        
        $items = array();
        
        if($query->num_rows() > 0)
        {
           foreach($query->result() as $item)
           {
               $items[] = $item;
           }
        }
        
        return json_encode($items);
    }
    
    function get_seller($username,$password)
    {
        $sql = "SELECT userid FROM user WHERE username = ? AND password = ?";
        $query = $this->db->query($sql,array($username,md5($password)));
        
        $user = array("userid"=>"0");
        if($query->num_rows()== 1)
        {
            $user = $query->row();
        }
        
        return json_encode($user);
    }
    
    function add_item()
    {
        
    }

}


?>
