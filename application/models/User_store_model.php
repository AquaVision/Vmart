<?php

class User_store_model extends CI_Model {
    
    
    function get_seller_data($seller_id,$status)
    {
        $sql = "SELECT * FROM store WHERE userid = ? AND status = ?";
        $query = $this->db->query($sql,array($seller_id,$status));
        
        $data = array();
        
        if($query->num_rows() == 1)
        {
            $data[] = $query->row();
        }
        
//        echo "Seller Data :</br>";
//        print_r($data);
//        echo "<br/>";
        
        
        return $data;
    }
    
    function get_seller_products($seller_id,$status,$limit)
    {
        //$sql = "SELECT * FROM view_all_seller_items WHERE userid = ? && status = ?";
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
        
//        echo "Seller Products.</br>";
//        print_r($items);
//        echo "<br/>";

        return $items;
    }
    
    
    function get_featured_products($seller_id,$order_status,$item_status,$limit)
    {
        $sql = "SELECT selleruserid,item_id,item_order_count,qty,title,price,currency,rating,image_url FROM sales_counts_view WHERE selleruserid = ? && order_status = ? AND item_status= ? AND qty>0 ORDER BY item_order_count DESC LIMIT ?";
        $query = $this->db->query($sql,array($seller_id,$order_status,$item_status,$limit));
        
        $featured_items = array();
        
        if($query->num_rows() > 0)
        {
           foreach($query->result() as $item)
           {
               $featured_items[] = $item;
           }
        }
        
//        echo "Featured Products.</br>";
//        print_r($featured_items);
//        echo "<br/>";
        
        
        return $featured_items;
    }
    
    
    function get_new_arrivals($seller_id,$status,$limit)
    {
        //$sql = "SELECT item_id,userid,item_created FROM view_all_seller_items WHERE userid = ? AND status = ? ORDER BY item_created DESC LIMIT 30";
        $sql = "SELECT item_id,userid,item_created,qty,title,price,price_currancy,rating,MainImageUrl FROM store_item WHERE userid = ? AND status = ? AND qty>0 ORDER BY item_created DESC LIMIT ?";
        $query = $this->db->query($sql,array($seller_id,$status,$limit));
        
        $new_items = array();
        
        if($query->num_rows() > 0)
        {
           foreach($query->result() as $item)
           {
               $new_items[] = $item;
           }
        }
        
//        echo "Featured Products.</br>";
//        print_r($new_items);
//        echo "<br/>";
        
        return $new_items;
    }
    
    function get_store_covers($seller_id)
    {
        $sql = "SELECT cover_image FROM cover_images WHERE userid = ?";
        $query = $this->db->query($sql,array($seller_id));
        
        $store_images = array();
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $image)
            {
                $store_images[] = $image;
            }
        }
        
        return $store_images;
    }
    
    function get_item_images($item_id)
    {
        $sql = "SELECT item_image FROM item_images WHERE iitem_id = ?  LIMIT 1";
        $query = $this->db->query($sql,array($item_id));
        
        $item_image = "";
        if($query->num_rows() == 1 )
        {
            $item_image = $query->row(); 
        }
        
        return $item_image;
        
    }
    
    
    function isSellerExistes($sellerid){
        $sql = "select userid from forkeepinsession where seller_id = '$sellerid' and is_seller = '1' and sellerstatus = 'ACTIVE_VERIFIED'";
        $record = $this->db->query($sql);
        if($record->num_rows() == 1){
            return $record->row()->userid;
        }else{
           return -1;
        }
    }


}

?>
