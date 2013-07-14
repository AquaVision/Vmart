<?php

class Land_model extends CI_Model {
    
    function get_top_items()
    {
         //$sql = "SELECT * FROM view_top_items WHERE status='ACTIVE'";
        $sql = "SELECT * FROM store_item WHERE status='ACTIVE' AND Qty > 0 LIMIT 16";
         $query = $this->db->query($sql);
         
         if($query->num_rows() > 1)
         {
             foreach ($query->result() as $item)
             {
                 $items[] = $item;
             }
             
             return $items;
         }
    }
    
    function get_item_details($item_id)
    {
        //$sql = "SELECT * FROM view_top_items WHERE item_id = ? WHERE status='ACTIVE'";
        $sql = "SELECT * FROM store_item WHERE item_id = ? WHERE status='ACTIVE'";
        $query = $this->db->query($sql,$item_id);
         
        if($query->num_rows() == 1)
        {
            $item_data['item'] = $query->row();
        }
        else
        {
            echo "No Records Found";
        }
        return $item_data;
    }

}

?>
