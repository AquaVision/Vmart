<?php

class Product_model extends CI_Model {

    function get($id) {

        $result = $this->db->query("SELECT item_id, cat_id, 
	userid, 
	title, 
	similar, 
	price, 
	price_currancy, 
	Qty, 
	breif_description, 
	complete_description, 
	item_created, 
	rating, 
	STATUS, 
	vmartCatcatid, 
	MainImageUrl AS item_image
	FROM store_item  WHERE item_id = '.$id.' ");
        $row = $result->row();
        return $row;
    }

    function get_new_orders($id) {

        $result = $this->db->query("SELECT COUNT(selleruserid) as countx FROM buyer_store_item_order where selleruserid ='" . $id . "' AND seller_notified = '0'");

        if ($result->num_rows() != 0) {
            $order_count = $result->row()->countx;

            if ($order_count != 0) {
                return $order_count;
            } else {
                return -1;
            }
        } else {
            return -1;
        }
    }

    function do_checkout($cart) {
        $buyr_id = $cart['userId'];
        foreach ($cart['checkout_data'] as $item) {

            $product_id = $item['id'];
            $quantity = $item['qty'];

            $result = $this->db->query("SELECT * FROM view_all_seller_items WHERE item_id = '.$product_id.' LIMIT 1")->row();
            $available_qty = $result->Qty;

            if ($available_qty >= $quantity) {

                $new_available_qty = $available_qty - $quantity;
                $this->db->query("UPDATE store_item SET Qty ='" . $new_available_qty . "' WHERE item_id ='" . $product_id . "' LIMIT 1");
                $this->db->query("INSERT INTO 
                                 buyer_store_item_order 
                                 (buyeruserid,selleruserid,item_id,cat_id,price,Qty,title,total_amount,date_int,MONTH,YEAR,DAY,buyer_response)
                                 VALUES
                                 ('" . $buyr_id . "','" . $result->userid . "','" . $result->item_id . "','" . $result->cat_id . "','" . $result->price . "','" . $quantity . "','" . $result->title . "','" . $item['subtotal'] . "','" . get_date_time() . "','" . get_curret_year() . "','" . get_curret_month() . "','" . get_curret_date() . "','buyer_response')");
            } else {
                echo 'There is no sufficint quantity of ' . $item['name'];
            }
        }
    }

}

