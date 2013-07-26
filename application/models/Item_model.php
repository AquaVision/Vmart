<?php

class Item_model extends CI_Model 
{
    public function get_seller($item_id)
    {
        $sql = "SELECT * FROM store_item WHERE item_id = ?";
        $query = $this->db->query($sql,array($item_id));
        
        $seller_data = array();
        if($query->num_rows() == 1 )
        {
            $seller_data['seller_data'] = $query->row(); 
        }
        return $seller_data;
    }
    
    
    
}

?>
