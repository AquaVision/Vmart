<?php

class Add_item_model extends CI_Model 
{
    public function add_item($item_data)
    {
        $insert = $this->db->insert('store_item', $item_data);
	return $insert;
    }
    
    public function get_cat_id($category)
    {
        $sql = "SELECT cat_id FROM store_categories WHERE cat_name = ?";
        $query = $this->db->query($sql,$category);

        if($query->num_rows() == 1)
        {
            $data['cat_id']= $query->row();
            return $data;
        }
    }
    
    public function get_vcat_id($vcategory)
    {
        $sql = "SELECT catid FROM vmartCategories WHERE catname = ?";
        $query = $this->db->query($sql,$vcategory);

        $data['catid'] = $query->row();
        return $data;
        
    }
    
    public function get_seller_categories($userid,$state)
    {
        $sql = "SELECT * FROM store_categories WHERE userid = ? AND state = ? ";
        $query = $this->db->query($sql,array($userid,$state));
        
        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
               $data[] = $row;
            }
            return $data;
        }
    }
    
    public function get_vmart_categories()
    {
        $sql = "SELECT catname FROM vmartCategories";
        $query = $this->db->query($sql);
        
        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
               $data[] = $row;
            }
            return $data;
        }        
    }
}

?>
