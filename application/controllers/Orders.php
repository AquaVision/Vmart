<?php

class Orders extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ordersdata');
    }

    function AllOrders($type = NULL) {

        $typearray = array("IN_PROGRESS", "ON_DELIVERY", "COMPLETED", "REJECTED");

        if (in_array($type, $typearray)) {
            $this->Ordersdata->markNotified();
            setValue("ourdercount", -1);
            $data = $this->Ordersdata->getAllOrders($type);
            $ordercount = $this->Ordersdata->countOrders();
            $newar["data"] = $data;
            $newar["type"] = "current_orders";
            $newar["ordercount"] = $ordercount;
            $this->load->view("seller_selled", $newar);
        } else {
            redirect("");
        }
    }

    function OrderDiscussion($orderid) {
        if ($this->Ordersdata->_isAccessible($orderid)) {
            $data = $this->Ordersdata->_getBasicOrderData($orderid);
            $buyerdata = $this->Ordersdata->_getUserdata($data->buyeruserid);
            $messages = $this->Ordersdata->_getUsermessages($orderid);
            $newdata["basic"] = $data;
            $newdata["buyer"] = $buyerdata;
            $newdata["messages"] = $messages;
            $this->load->view("Order_Discussion",$newdata);
        } else {
            redirect("");
        }
    }
    
    function addComment(){
        $this->Ordersdata->_addComment();
    }
    
    function chnageState(){
        $this->Ordersdata->_changeState();
    }
    
   

}

?>
