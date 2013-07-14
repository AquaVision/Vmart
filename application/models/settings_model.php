<?php

class settings_model extends CI_Model {
    function getSettings(){
        $userid = getUserID();
        $data = array();
        $user = $this->db->query("select  full_name, email, username, password, address,  joined_date, is_seller from  user where  userid = '$userid'");
        if($user->num_rows() >0){
            $data["user"] = $user->row();
        }
        $buyer = $this->db->query("select  profile_pic,  about_you, active_address, mobile_reach from  buyer where userid = '$userid'");
        if($buyer->num_rows() >0){
            $data["buyer"] = $buyer->row();
        }
        $seller = $this->db->query("SELECT seller_mobile, mob_verification_nub, seller_id, enable_ussd, becm_seller, seller.status AS sellerstatus,account_hold_name, bank_name, branch_code,account_number   FROM seller LEFT JOIN seller_bank ON seller.userid = seller_bank.userid where seller.userid = '$userid'");
        if($seller->num_rows() >0){
            $data["seller"] = $seller->row();
        }
        return $data;
    }

}

?>