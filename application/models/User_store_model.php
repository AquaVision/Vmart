<?php

class User_store_model extends CI_Model {

    function get_seller_data($seller_id, $status) {
        $sql = "SELECT * FROM store WHERE userid = ? AND status = ?";
        $query = $this->db->query($sql, array($seller_id, $status));

        $data = array();

        if ($query->num_rows() == 1) {
            $data[] = $query->row();
        }

//        echo "Seller Data :</br>";
//        print_r($data);
//        echo "<br/>";


        return $data;
    }

    function get_seller_products($seller_id, $status, $limit) {
        //$sql = "SELECT * FROM view_all_seller_items WHERE userid = ? && status = ?";
        $sql = "SELECT * FROM store_item WHERE userid = ? AND status = ? AND Qty>0 ORDER BY item_created DESC LIMIT ?";
        $query = $this->db->query($sql, array($seller_id, $status, $limit));

        $items = array();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $item) {
                $items[] = $item;
            }
        }

//        echo "Seller Products.</br>";
//        print_r($items);
//        echo "<br/>";

        return $items;
    }

    function get_featured_products($seller_id, $order_status, $item_status, $limit) {
        $sql = "SELECT selleruserid,item_id,item_order_count,qty,title,price,currency,rating,image_url FROM sales_counts_view WHERE selleruserid = ? && order_status = ? AND item_status= ? AND qty>0 ORDER BY item_order_count DESC LIMIT ?";
        $query = $this->db->query($sql, array($seller_id, $order_status, $item_status, $limit));

        $featured_items = array();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $item) {
                $featured_items[] = $item;
            }
        }

//        echo "Featured Products.</br>";
//        print_r($featured_items);
//        echo "<br/>";


        return $featured_items;
    }

    function get_new_arrivals($seller_id, $status, $limit) {
        //$sql = "SELECT item_id,userid,item_created FROM view_all_seller_items WHERE userid = ? AND status = ? ORDER BY item_created DESC LIMIT 30";
        $sql = "SELECT item_id,userid,item_created,qty,title,price,price_currancy,rating,MainImageUrl FROM store_item WHERE userid = ? AND status = ? AND qty>0 ORDER BY item_created DESC LIMIT ?";
        $query = $this->db->query($sql, array($seller_id, $status, $limit));

        $new_items = array();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $item) {
                $new_items[] = $item;
            }
        }

//        echo "Featured Products.</br>";
//        print_r($new_items);
//        echo "<br/>";

        return $new_items;
    }

    function get_store_covers($seller_id) {
        $sql = "SELECT cover_image FROM cover_images WHERE userid = ?";
        $query = $this->db->query($sql, array($seller_id));

        $store_images = array();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $image) {
                $store_images[] = $image;
            }
        }

        return $store_images;
    }

    function get_item_images($item_id) {
        $sql = "SELECT item_image FROM item_images WHERE iitem_id = ?  LIMIT 1";
        $query = $this->db->query($sql, array($item_id));

        $item_image = "";
        if ($query->num_rows() == 1) {
            $item_image = $query->row();
        }

        return $item_image;
    }

    function isSellerExistes($sellerid) {
        $sql = "select userid from forkeepinsession where seller_id = '$sellerid' and is_seller = '1' and sellerstatus = 'ACTIVE_VERIFIED'";
        $record = $this->db->query($sql);
        if ($record->num_rows() == 1) {
            return $record->row()->userid;
        } else {
            return -1;
        }
    }

    function _getsellerShopname($selllerid) {
        $sql = "select shopname from seller where userid = '$selllerid'";
        $sql = $this->db->query($sql);
        if ($sql->num_rows() > 0) {
            return $sql->row()->shopname;
        }
    }

    function _getselleruniqe($sellerid) {
        $sql = "select username from user where userid = '$sellerid'";
        $sql = $this->db->query($sql);
        if ($sql->num_rows() > 0) {
            return $sql->row()->username;
        }
    }

    function _getNavdata($sellerid) {

        $query = "select store_categories.cat_id as cat_id, 
	store_categories.userid as userid, 
	cat_name, 
	title
	from 
	store_categories left join store_item on store_categories.cat_id = store_item.cat_id where store_categories.state = 'ACTIVE' and store_item.status = 'ACTIVE' And store_categories.userid = '$sellerid'";
        $query = $this->db->query($query);
        $category = array();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $category[] = $row;
            }
        }

        $another = "select buyer_response,buyer_response_type,profile_pic,buyer_store_item_order.orderid from buyer_store_item_order left join buyer on buyer_store_item_order.buyeruserid = buyer.userid where buyer_store_item_order.selleruserid = '$sellerid' order by buyer_store_item_order.orderid desc limit 10";
        $another = $this->db->query($another);
        $comments = array();
        if ($another->num_rows() > 0) {
            foreach ($another->result() as $row) {
                $comments[] = $row;
            }
        }

        $sellersocial = "SELECT facebooksoicalme FROM store WHERE userid = '$sellerid'";
        $ainoy = $this->db->query($sellersocial);
        $facboook = "";
        if ($ainoy->num_rows() > 0) {
            $facboook = $ainoy->row()->facebooksoicalme;
        }
        
        $query = "select cat_name from store_categories where userid = '$sellerid' and state = 'ACTIVE'";
        
        $query = $this->db->query($query);
        $totalcate = array();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $totalcate[] = $row->cat_name;
            }
        }
        
        $datax["totalcate"] = $totalcate;
        $datax["category"] = $category;
        $datax["comments"] = $comments;
        $datax["facboook"] = $facboook;

        return $datax;
    }

}

?>
