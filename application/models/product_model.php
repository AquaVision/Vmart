<?php

class Product_model extends CI_Model{
    
    
    
    
  function get($id){
      
      $results = $this->db->get_where('store_item', array('item_id' => $id))->result();
      $result = $results[0];
      return $result;
      
  }  
    
    
}

