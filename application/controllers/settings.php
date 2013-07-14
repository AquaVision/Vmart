<?php

class settings extends CI_Controller {

    function index() {

        $this->load->view('public_profile_seller');
    }

    //-------------------- for profile settings

    function sellerSettings() {
        $this->load->view('public_profile_seller');
    }

    function buyerSettings() {
        $this->load->view('public_profile_buyer');
    }

    function generalSettings() {
        
        if(islogedUser($this->session)){
            echo "aiyyo";
        }else{
            redirect('Vmart', 'refresh');
        }
       // $this->load->view('public_profile_settings');
    }

}

?>
