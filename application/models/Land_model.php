<?php

class Land_model extends CI_Model {

    function get_top_items() {
        //$sql = "SELECT * FROM view_top_items WHERE status='ACTIVE'";
        $sql = "SELECT * FROM store_item WHERE status='ACTIVE' AND Qty > 0 LIMIT 15";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 1) {
            foreach ($query->result() as $item) {
                $items[] = $item;
            }

            return $items;
        }
    }

    function get_item_details($item_id) {
        //$sql = "SELECT * FROM view_top_items WHERE item_id = ? WHERE status='ACTIVE'";
        $sql = "SELECT * FROM store_item WHERE item_id = ? AND status='ACTIVE'";
        $query = $this->db->query($sql, $item_id);
        if ($query->num_rows() == 1) {
            $item_data['item'] = $query->row();
        } else {
            echo "No Records Found";
        }
        return $item_data;
    }

    function get_latest_Items() {

        //$sql = "SELECT * FROM view_top_items WHERE status='ACTIVE'";
       $today = get_date_time();
        $sql = "SELECT *,DATEDIFF('$today', item_created) AS daysx  FROM store_item WHERE STATUS='ACTIVE' AND Qty > 0 ORDER BY item_id DESC LIMIT 4";
        
       
        $query = $this->db->query($sql);
        $items = array();
        if ($query->num_rows() > 1) {
            foreach ($query->result() as $item) {
                $items[] = $item;
            }

            return $items;
        }
    }

    function get_top_sellers() {
        //$sql = "SELECT * FROM view_top_items WHERE status='ACTIVE'";
        $sql = "select 	userid, 
	seller_mobile, 
	mob_verification_nub, 
	seller_id, 
	becm_seller, 
	status, 
	mobverified, 
	wizardseller, 
	total_rating, 
	shopname_pic, 
	shopname
	 
	from 
	seller where status = 'ACTIVE_VERIFIED'
	order by total_rating asc limit 9";
        
        $query = $this->db->query($sql);
        $items = array();
        if ($query->num_rows() > 1) {
            foreach ($query->result() as $item) {
                $items[] = $item;
            }

            return $items;
        }
    }

}

?>
