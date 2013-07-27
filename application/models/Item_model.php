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
    
    public function get_images($item_id)
    {
        $sql = "SELECT * FROM item_images WHERE iitem_id = ?";
        $query = $this->db->query($sql,array($item_id));
        
        $images = array();
        //echo $query->num_rows();
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
                $images[] = $row;
            }
        }
        
        return $images;
    }
    
    public function get_cutomer_reviews($item_id)
    {
        $sql = "SELECT * FROM view_reviews WHERE item_id = ?";
        $query = $this->db->query($sql,array($item_id));
        
        $item_reviews = array();
        //echo $query->num_rows();
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
                $item_reviews[] = $row;
            }
        }
        
        return $item_reviews;
    }
    
    
}

?>
