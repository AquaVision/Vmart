<?php

class Product_model extends CI_Model{

    function get($id){
      
      $result  = $this->db->query("SELECT * FROM view_top_items WHERE item_id = '.$id.' LIMIT 1");
      /*
      $results = $this->db->get_where('view_top_items', array('item_id ' => $id))->result();
      $result = $results[0];
      
       * 
       */
      $row = $result->row();
      return $row;
  }  
    
    
}

