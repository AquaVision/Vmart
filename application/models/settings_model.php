<?php

class settings_model extends CI_Model {

    function getSettings() {
        $userid = getUserID();
        $data = array();
        $user = $this->db->query("select  full_name, email, username, password, address,  joined_date, is_seller from  user where  userid = '$userid'");
        if ($user->num_rows() > 0) {
            $data["user"] = $user->row();
        }
        $buyer = $this->db->query("select  profile_pic,  about_you, active_address, mobile_reach from  buyer where userid = '$userid'");
        if ($buyer->num_rows() > 0) {
            $data["buyer"] = $buyer->row();
        }
        $seller = $this->db->query("SELECT seller_mobile, mob_verification_nub, seller_id,  becm_seller,mobverified, seller.status AS sellerstatus,account_hold_name, bank_name, branch_code,bank_code,account_number   FROM seller LEFT JOIN seller_bank ON seller.userid = seller_bank.userid where seller.userid = '$userid'");
        if ($seller->num_rows() > 0) {
            $data["seller"] = $seller->row();
        }

        return $data;
    }

    function saveGeneralSettings($changpass) {
        $userid = getUserID();
        $fullname = $this->input->post('fullname');
        $address = $this->input->post('addresssxz');
        $confirmnew = md5($this->input->post('confirmnewpass'));
        $passwrd = "";
        if ($changpass) {
            $passwrd = "password = '$confirmnew',";
        }
        $query = "UPDATE user SET  full_name = '$fullname', $passwrd  address = '$address' WHERE userid = '$userid' ;";
        $this->db->query($query);
    }
    
    function checkpassword($password){
        $password = md5($password);
        $email = getUserEmail();
        $userid = getUserID();
        $user = $this->db->query("select  username from user where  userid = '$userid' && email ='$email' && password = '$password' ");
        if ($user->num_rows() > 0) {
            return true;
        }
        return false;
    }
    
    
    function isVerifiedSeller(){
        $userid = getUserID();
        $user = $this->db->query("select  userid from seller where userid ='$userid' && mobverified = '1' ");
        if($user->num_rows() > 0){
           return true;
        }else{
            echo false;
        }
    }
    
    function addVerificationkey($key){
        $userid = getUserID();
        $user = $this->db->query("update seller set mob_verification_nub = '$key' where userid = '$userid' ");
    }
    
    

}

?>
