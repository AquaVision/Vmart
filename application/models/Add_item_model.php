<?php

class Add_item_model extends CI_Model 
{
    public function add_item($item_data)
    {
        $insert = $this->db->insert('store_item', $item_data);
	return $this->db->insert_id();
    }
    
    public function add_item_images($last_insert,$filenames,$folder_path)
    {
        $sql = "SELECT item_id,cat_id,userid FROM store_item WHERE item_id = ?";
        $query = $this->db->query($sql,$last_insert);

        if($query->num_rows() == 1)
        {
            $data['last_insert']= $query->row();
        }
        else
        {
            echo "No Records Found";
        }
        
        //echo $data['last_insert']->item_id;
        foreach($filenames as $filename)
        {
            $file_url = $folder_path."/".$filename;
            
            $item_image_data = array(
            'iitem_id'=>$data['last_insert']->item_id,
            'item_image'=>$file_url,
            'store_itemcat_id'=>$data['last_insert']->cat_id,
            'store_itemuserid'=>$data['last_insert']->userid,
            );
            
            $insert = $this->db->insert('item_images', $item_image_data);
            if($insert!=1)
            {
                echo "Error saving image url";    
            }
        }
        
        
    }
    
    public function get_cat_id($category)
    {
        $sql = "SELECT cat_id FROM store_categories WHERE cat_name = ? AND userid = ? ";
        $query = $this->db->query($sql,array($category,getUserID()));

        if($query->num_rows() == 1)
        {
            $data['cat_id']= $query->row();
            return $data;
        }
        else
        {
            echo "No Records Found";
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
