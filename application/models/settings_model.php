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

        if ($data["seller"]->mobverified == 1) {
            $data["savurlform2"] = "SaveSellerSetings";
        } else {
            $data["savurlform2"] = "SaveSellerSettings";
        }

        return $data;
    }

    function saveBuyerSettings() {
        
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

    function checkpassword($password) {
        $password = md5($password);
        $email = getUserEmail();
        $userid = getUserID();
        $user = $this->db->query("select  username from user where  userid = '$userid' && email ='$email' && password = '$password' ");
        if ($user->num_rows() > 0) {
            return true;
        }
        return false;
    }

    function isVerifiedSeller() {
        $userid = getUserID();
        $user = $this->db->query("select  userid from seller where userid ='$userid' && mobverified = '1' ");
        if ($user->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function addVerificationkey($key, $sellermobile) {
        $userid = getUserID();
        $this->db->query("update seller set mob_verification_nub = '$key', seller_mobile='$sellermobile' where userid = '$userid' ");
    }

    function checkVerificationKey($key) {
        $userid = getUserID();
        $user = $this->db->query("SELECT userid FROM seller WHERE userid = '$userid' && mob_verification_nub = '$key'");
        if ($user->num_rows() > 0) {
            $dattime = get_date_time();
            $this->db->query("UPDATE seller SET STATUS = 'ACTIVE_VERIFIED' , mobverified = '1' , becm_seller = '$dattime'  WHERE userid = '$userid' ");
            return true;
        } else {
            return false;
        }
    }

    function addGeneralSellerSettings() {
        $usrid = getUserID();
        $identity = $this->input->post("identity");
        $accholdername = $this->input->post("accountholdername");
        $bankname = $this->input->post("bankname123");
        $bankcode = $this->input->post("bankcode");
        $branchcode = $this->input->post("branchcode");
        $accountnumber = $this->input->post("accountnuber");

        $this->db->query("UPDATE seller SET seller_id ='$identity'  WHERE userid = '$usrid' ");
        $selerbank = $this->db->query("SELECT userid FROM seller_bank WHERE userid = '$usrid'");
        if ($selerbank->num_rows() > 0) {
            $this->db->query("UPDATE seller_bank 
                                SET 
                                account_hold_name = '$accholdername' , 
                                bank_name = '$bankname' , 
                                branch_code = '$branchcode' , 
                                account_number = '$accountnumber' , 
                                bank_code = '$bankcode'
                                WHERE
                                userid = '$usrid'");
        } else {
            $this->db->query("INSERT INTO seller_bank (userid, account_hold_name, bank_name, branch_code, account_number, bank_code) VALUES ('$usrid', '$accholdername', '$bankname', '$branchcode', '$accountnumber', '$bankcode')");
        }
    }

    function verifysellerid() {
        $userid = getUserID();
        $sellerid = $this->input->post("identity");
        $sellerids = $this->db->query("select userid from seller where seller_id ='$sellerid'  ");

        if ($sellerids->num_rows() > 0) {
            $dbuserid = $sellerids->row()->userid;
            if ($dbuserid == $userid) {
                return true;
            } else {
                return false;
            }
            return false;
        } else {
            return true;
        }
    }

    //Wizardseller -----------------------------------------------------------------

    function createStore($menuitems) {
        $usrid = getUserID();
        $reciveemailsTo = $this->input->post("recivetoemail");
        $showingEmail = $this->input->post("recivetoemail");

        $socialmediaURL = $this->input->post("stitle");
        $socialmediaName = $this->input->post("socialmediaicon");

        $phonenubers = $this->input->post("phonenubers");
        $location = $this->input->post("locationyour");
        $contactUs = $this->input->post("contactus");
        $aboutUs = $this->input->post("editordata");


        foreach ($menuitems as $key => $value) {
            echo "<h1>$key</h1><br/>";
            for ($y = 0; $y < count($value); ++$y) {
                echo "&nbsp;&nbsp;&nbsp;<h3>{$value[$y]}<h3/>";
            }
        }


        $exists = $this->db->query("select userid from store where userid = '$usrid'");
        echo "abc";
        if ($exists->num_rows() > 0) {
            $qinsert = "update store set  
                        email_for_meesage = ?, 
                        email_for_display = ?, 
                        location = ?,
                        aboutus = ?,
                        contactus = ?,
                        rating = ?,
                        companylogo = ?, 
                        status = ?
                        where userid = ? ";
            
            $this->db->query($qinsert, array($reciveemailsTo, $showingEmail, $location, $aboutUs, $contactUs, '5', 'companylogo', 'ACTIVE', $usrid));
            
        } else {
            echo "im here in inset";
            $qinsert = "INSERT INTO store 
                        (userid, 
                        email_for_meesage, 
                        email_for_display, 
                        location, 
                        aboutus, 
                        contactus, 
                        rating, 
                        companylogo, 
                        STATUS
                        )
                        VALUES
                        (?,  ?, ?, ?,  ?, ?, ?, ?, ?)";
            $this->db->query($qinsert, array($usrid, $reciveemailsTo, $showingEmail, $location, $aboutUs, $contactUs, '5', 'companylogo', 'ACTIVE'));
        }
    }

    //Wizardseller ----------------------------------------------------------------- 
}

?>
