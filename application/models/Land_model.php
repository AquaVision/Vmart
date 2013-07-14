<?php

class Land_model extends CI_Model {
    
    function get_top_items()
    {
         $sql = "SELECT * FROM view_top_items";
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

}

?>
