<?php

class Ordersdata extends CI_Model {

    function getAllOrders($status) {

        if (islogedUser()) {
            $userid = getUserID();

            $query = $this->db->query("SELECT orderid, 
                                buyeruserid, 
                                item_id, 
                                cat_id, 
                                price, 
                                Qty, 
                                title, 
                                total_amount, 
                                buyer_store_item_order.STATUS AS status, 
                                date_int, 
                                MONTH, 
                                YEAR, 
                                DAY, 
                                buyer_response, 
                                buyer_response_type, 
                                seller_notified,
                                profile_pic,
                                username

                                FROM 
                                (buyer_store_item_order LEFT JOIN buyer ON buyer_store_item_order.buyeruserid = buyer.userid) LEFT JOIN user ON  buyer_store_item_order.buyeruserid = user.userid 
                                 WHERE buyer_store_item_order.STATUS = '$status' AND selleruserid = '$userid'");


            $data = array();
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
            }
            return $data;
        } else {

            redirect("");
        }
    }

    function markNotified() {
        if (islogedUser()) {
            $userid = getUserID();
            $this->db->query("update buyer_store_item_order set seller_notified = '1' where selleruserid = '$userid'");
        } else {
            redirect("");
        }
    }

    function countOrders() {
        if (islogedUser()) {
            $userid = getUserID();
            $newary = array();
            $query = $this->db->query("select  COUNT(*) as total ,sum(STATUS = 'IN_PROGRESS') AS progress, sum(STATUS = 'ON_DELIVERY') AS delivery, SUM(STATUS = 'COMPLETED') AS complete, SUM(STATUS = 'REJECTED') AS rejected  FROM buyer_store_item_order where selleruserid = '$userid'");
            if ($query->num_rows() > 0) {
                $query = $query->row();
                if ($query->total != 0) {

                    $newary["total"] = $query->total;
                    $newary["progress"] = $query->progress;
                    $newary["complete"] = $query->complete;
                    $newary["delivery"] = $query->delivery;
                    $newary["rejected"] = $query->rejected;
                } else {
                    $newary["total"] = $query->total;
                    $newary["progress"] = 0;
                    $newary["complete"] = 0;
                    $newary["delivery"] = 0;
                    $newary["rejected"] = 0;
                }
            }
            return $newary;
        } else {
            redirect("");
        }
    }

    function _getBasicOrderData($orderid) {
        if (islogedUser()) {
            $userid = getUserID();

            $query = $this->db->query("SELECT orderid, 
                                buyeruserid, 
                                selleruserid,
                                item_id, 
                                cat_id, 
                                price, 
                                Qty, 
                                title, 
                                total_amount, 
                                buyer_store_item_order.STATUS AS status, 
                                date_int, 
                                MONTH, 
                                YEAR, 
                                DAY, 
                                buyer_response, 
                                buyer_response_type, 
                                seller_notified,
                                profile_pic,
                                username,
                                duration

                                FROM 
                                (buyer_store_item_order LEFT JOIN buyer ON buyer_store_item_order.buyeruserid = buyer.userid) LEFT JOIN user ON  buyer_store_item_order.buyeruserid = user.userid 
                                 WHERE   selleruserid = '$userid' AND orderid = '$orderid' ");


            $data = array();
            if ($query->num_rows() > 0) {
                $data = $query->row();
            }
            return $data;
        } else {

            redirect("");
        }
    }

    function _getUserdata($userid) {
        $query = $this->db->query("select userid,username,profile_pic from forkeepinsession  where userid = '$userid'");
        $data = array();
        if ($query->num_rows() > 0) {
            $data = $query->row();
        }

        return $data;
    }

    function _getUsermessages($orderid) {
        $query = $this->db->query("   
                     select orderid, 
                            message, 
                            created_date, 
                            user_messaged, 
                            messageid, 
                            type

                            from 
                            order_conversation where
                            orderid = '$orderid'
                        ");
        $data = array();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function _isAccessible($orderid) {
        $usrid = getUserID();
        $query = $this->db->query("select orderid from  buyer_store_item_order  where orderid = '$orderid' AND selleruserid = '$usrid'");

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    function _isUserOwns($orderid){
        $usrid = getUserID();
        $query = $this->db->query("select orderid from  buyer_store_item_order  where orderid = '$orderid' AND buyeruserid = '$usrid'");

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function _addComment() {
        $orderid = $this->input->post("oderid");
        $userid = getUserID();
        $comment = $this->input->post("comment");
        $date = get_date_time();
        if ($this->_isAccessible($orderid)) {
            $sqlquery = "INSERT INTO order_conversation 
                            (orderid, 
                            message, 
                            created_date, 
                            user_messaged
                            )
                            VALUES
                            ('$orderid', 
                            '$comment', 
                            '$date', 
                            '$userid')";

            $this->db->query($sqlquery);
            redirect("Orders/OrderDiscussion/$orderid");
        } else {
            redirect("");
        }
    }
    
    
    function _addCommentUser() {
        $orderid = $this->input->post("oderid");
        $userid = getUserID();
        $comment = $this->input->post("comment");
        $date = get_date_time();
        if ($this->_isUserOwns($orderid)) {
            $sqlquery = "INSERT INTO order_conversation 
                            (orderid, 
                            message, 
                            created_date, 
                            user_messaged
                            )
                            VALUES
                            ('$orderid', 
                            '$comment', 
                            '$date', 
                            '$userid')";

            $this->db->query($sqlquery);
            redirect("Orders/UserOrderDiscussion/$orderid");
        } else {
            redirect("");
        }
    }
    

    function _changeState() {
        $orderid = $this->input->post("oderid");
        $time = get_date_time();
        if ($this->_isAccessible($orderid)) {

            $query = $this->db->query("SELECT status FROM  buyer_store_item_order WHERE orderid = '$orderid'");
            if ($query->num_rows() > 0) {
                $rows = $query->row();
                if ($rows->status == "IN_PROGRESS") {
                    $this->db->query("update buyer_store_item_order set status = 'ON_DELIVERY' where orderid = '$orderid' ");
                    $message = "Your seller has change the order state to \"On Delivery\" ";
                    $this->db->query("INSERT INTO order_conversation 
                                        (orderid, 
                                        message, 
                                        created_date, 
                                        user_messaged, 
                                        TYPE
                                        )
                                        VALUES
                                        ('$orderid', 
                                        '$message', 
                                        ' $time', 
                                        '-1', 
                                        'SPECIAL'
                                        )");
                    
                    
                } else if ($rows->status == "ON_DELIVERY") {
                    
                    $this->db->query("update buyer_store_item_order set status = 'IN_PROGRESS' where orderid = '$orderid' ");
                    $message = "For some reason the Order is again marked as In Progress";
                    $this->db->query("INSERT INTO order_conversation 
                                        (orderid, 
                                        message, 
                                        created_date, 
                                        user_messaged, 
                                        TYPE
                                        )
                                        VALUES
                                        ('$orderid', 
                                        '$message', 
                                        ' $time', 
                                        '-1', 
                                        'SPECIAL'
                                        )");
                  
                }
                
                redirect("Orders/OrderDiscussion/$orderid");
            } else {
                redirect("");
            }
        } else {
            redirect("");
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    function getAllOrdersofUser($status) {

        if (islogedUser()) {
            $userid = getUserID();

            $query = $this->db->query("   SELECT
                                          orderid,
                                          buyeruserid,
                                          selleruserid,
                                          item_id,
                                          cat_id,
                                          price,
                                          Qty,
                                          title,
                                          total_amount,
                                          buyer_store_item_order.status AS status,
                                          date_int,
                                          MONTH,
                                          YEAR,
                                          DAY,
                                          buyer_response,
                                          buyer_response_type,
                                          seller_notified,
                                          duration,
                                          profile_pic,
                                          username,
                                          duration
                                        FROM buyer_store_item_order
                                          LEFT JOIN user
                                            ON buyer_store_item_order.selleruserid = user.userid
                                          LEFT JOIN buyer
                                            ON buyer_store_item_order.selleruserid = buyer.userid
                                        WHERE buyeruserid = '$userid'
                                            AND buyer_store_item_order.status = '$status'");

         
    
            

            $data = array();
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
            }
            return $data;
        } else {

            redirect("");
        }
    }
    
    
    function countShoppings() {
        if (islogedUser()) {
            $userid = getUserID();
            $newary = array();
            $query = $this->db->query("select  COUNT(*) as total ,sum(STATUS = 'IN_PROGRESS') AS progress, sum(STATUS = 'ON_DELIVERY') AS delivery, SUM(STATUS = 'COMPLETED') AS complete, SUM(STATUS = 'REJECTED') AS rejected  FROM buyer_store_item_order where buyeruserid = '$userid'");
            if ($query->num_rows() > 0) {
                $query = $query->row();
                if ($query->total != 0) {

                    $newary["total"] = $query->total;
                    $newary["progress"] = $query->progress;
                    $newary["complete"] = $query->complete;
                    $newary["delivery"] = $query->delivery;
                    $newary["rejected"] = $query->rejected;
                } else {
                    $newary["total"] = $query->total;
                    $newary["progress"] = 0;
                    $newary["complete"] = 0;
                    $newary["delivery"] = 0;
                    $newary["rejected"] = 0;
                }
            }
            return $newary;
        } else {
            redirect("");
        }
    }
    
    
    
    
     function _getBasicOrderDataUserPers($orderid) {
        if (islogedUser()) {
            $userid = getUserID();

            $query = $this->db->query("SELECT orderid, 
                                buyeruserid, 
                                selleruserid,
                                item_id, 
                                cat_id, 
                                price, 
                                Qty, 
                                title, 
                                total_amount, 
                                buyer_store_item_order.STATUS AS status, 
                                date_int, 
                                MONTH, 
                                YEAR, 
                                DAY, 
                                buyer_response, 
                                buyer_response_type, 
                                seller_notified,
                                profile_pic,
                                username,
                                duration

                                FROM 
                                (buyer_store_item_order LEFT JOIN buyer ON buyer_store_item_order.buyeruserid = buyer.userid) LEFT JOIN user ON  buyer_store_item_order.buyeruserid = user.userid 
                                 WHERE   buyeruserid = '$userid' AND orderid = '$orderid' ");


            $data = array();
            if ($query->num_rows() > 0) {
                $data = $query->row();
            }
            return $data;
        } else {

            redirect("");
        }
    }
    
    
    function _Compltetorder() {
        $orderid = $this->input->post("oderid");
        $userid = getUserID();
        $comment = $this->input->post("finalrevie");
        $status = $this->input->post("status");
        $date = get_date_time();
       
        if((( (in_array("good", $status)) || (in_array("bad", $status)) ) && $this->_isUserOwns($orderid))  ){
        if ($this->_isUserOwns($orderid)) {
            $ste = $status[0];
            $this->db->query("update buyer_store_item_order set status = 'COMPLETED' , buyer_response = '$comment' ,  buyer_response_type = '$ste'    where orderid = '$orderid'  &&  buyeruserid = '$userid' ");
            $type = "-2";
            if($ste == "bad"){
                $type = "-3";
            }
            $message = $comment." - Order has been marked as completed";
            $this->db->query("INSERT INTO order_conversation 
                                        (orderid, 
                                        message, 
                                        created_date, 
                                        user_messaged, 
                                        TYPE
                                        )
                                        VALUES
                                        ('$orderid', 
                                        '$message', 
                                        ' $date', 
                                        '$type', 
                                        'SPECIAL'
                                        )");
            redirect("Orders/UserOrderDiscussion/$orderid");
        } else {
            redirect("");
        }
        }
    }
    
    
    
    
   
    
    
    
    

}

?>
