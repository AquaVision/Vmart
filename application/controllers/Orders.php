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
    
    function addUsercomment(){
        $this->Ordersdata->_addCommentUser();
    }


    function chnageState(){
        $this->Ordersdata->_changeState();
    }
    
    
    function completeorder(){
        $this->Ordersdata->_Compltetorder();
    }


























    function shopped($type = NULL){
        
        $typearray = array("IN_PROGRESS", "ON_DELIVERY", "COMPLETED", "REJECTED");

        if (in_array($type, $typearray)) {
        
            $data = $this->Ordersdata->getAllOrdersofUser($type);
            $ordercount = $this->Ordersdata->countShoppings();
            $newar["data"] = $data;
            $newar["type"] = "current_orders";
            $newar["ordercount"] = $ordercount;
            
        } else {
            redirect("");
        }
        $this->load->view("user_shopped",$newar);
    }
    
    
    function UserOrderDiscussion($orderid){
        
        if ($this->Ordersdata->_isUserOwns($orderid)) {
            $data = $this->Ordersdata->_getBasicOrderDataUserPers($orderid);
            $seller = $this->Ordersdata->_getUserdata($data->selleruserid);
            $messages = $this->Ordersdata->_getUsermessages($orderid);
            $newdata["basic"] = $data;
            $newdata["seller"] = $seller;
            $newdata["messages"] = $messages;
            
            $this->load->view("UserOrderDiscussion",$newdata);
        } else {
            redirect("");
        }
        
    }

     
    
}

?>
