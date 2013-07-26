<?php

class ShopSettings extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        redirect("Vmart");
    }

    function shop() {
        $rightbar["rightbar"] = "SHOPSETTINGS";
        $this->load->view("seller_store", $rightbar);
    }

}

?>
