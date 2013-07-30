<?php

class settings_model extends CI_Model {

    function getSettings() {
        $userid = getUserID();
        $data = array();
        $user = $this->db->query("select  full_name, email, username, password, address,  joined_date, is_seller from  user where  userid = '$userid'");
        if ($user->num_rows() > 0) {
            $data["user"] = $user->row();
        }
        $buyer = $this->db->query("select  profile_pic,  about_you,  mobile_reach from  buyer where userid = '$userid'");
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

    function saveGeneralSettings($changpass,$profilepic) {
        $userid = getUserID();
        $fullname = $this->input->post('fullname');
        $address = $this->input->post('addresssxz');
        $confirmnew = md5($this->input->post('confirmnewpass'));
        $passwrd = "";
        if ($changpass) {
            $passwrd = "password = '$confirmnew',";
        }
        $query = "UPDATE user SET  full_name = '$fullname', $passwrd  address = '$address' WHERE userid = '$userid' ";
        $this->db->query($query);
        
        $usermobile = $this->input->post("usermobiledfd");
        $aboutu = $this->input->post("aboutupx");
        $query = "update buyer set  $profilepic  about_you = '$aboutu'  , mobile_reach = '$usermobile' where userid = '$userid' ";
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
            $this->db->query("UPDATE USER SET is_seller = '1'  WHERE userid = '$userid' ");
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
        $this->db->query("UPDATE user set is_seller ='1' where userid = '$usrid'");
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

        $totphoneQuerypart = "";
        $phonenubers = $this->input->post("phonenubers");
        if ($phonenubers) {
            $comma = "";
            foreach ($phonenubers as $value) {
                $totphoneQuerypart .= "$comma('$usrid', '$value')";
                $comma = ",";
            }
        }

        $totalSocialMediaQuerypart = "";
        $socialmediaURL = $this->input->post("stitle");
        $socialmediaName = $this->input->post("socialmediaicon");
        if ($socialmediaURL) {
            $idx = 0;
            $comma = "";
            foreach ($socialmediaName as $value) {
                if ($value != '') {
                    $socialMedURl = $socialmediaURL[$idx];
                    $socialMedName = substr($value, 0, strlen($value) - 4);
                    $totalSocialMediaQuerypart .= "$comma( '$usrid', '$value', '$socialMedName', '$socialMedURl')";
                    $comma = ",";
                }
                ++$idx;
            }
        }


        $location = $this->input->post("locationyour");
        $contactUs = $this->input->post("contactus");
        $aboutUs = $this->input->post("editordataxy");





        $exists = $this->db->query("select userid from store where userid = '$usrid'");
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

        //adding phonnubers 
        if ($phonenubers) {
            $this->db->query("DELETE FROM seller_phones  WHERE  userid = '$usrid'");
            $this->db->query("INSERT INTO seller_phones (userid, phone_number) VALUES $totphoneQuerypart");
        }
        //end adding phonenubers
        //adding socialmedia
        if ($socialmediaURL) {
            $this->db->query("DELETE FROM seller_socialmedia_data WHERE userid = '$usrid' ");
            $this->db->query("INSERT INTO seller_socialmedia_data (userid, socialmediaImg, socialmediaName, socialmediaURL) VALUES  $totalSocialMediaQuerypart");
        }
        //end adding socialmedia



        if (count($menuitems) > 0) {
//            try {
//                $this->db->delete('store_item', array('userid' => $usrid));
//                $this->db->delete('store_categories', array('userid' => $usrid));
//            } catch (Exception $e) {
//                
//            }     
            $comma = "";
            foreach ($menuitems as $key => $value) {
                $this->db->query("INSERT INTO store_categories (userid, cat_name) VALUES  ('$usrid','$key') ");
                $generatedid = $this->db->insert_id();
                foreach ($value as $value1) {
                    if ($value1 != "") {
                        $this->db->query("INSERT INTO store_item (cat_id, userid, title) VALUES('$generatedid', '$usrid', '$value1' )");
                    }
                }
            }
        }
        
        $imagearray = array();
        $imagesz = $this->input->post("imagenamescover");
        if ($imagesz) {
            $imagearray = $imagesz;
        }

        if (count($imagearray) > 0) {
            $querypart = "";
            $comma = "";
            foreach ($imagearray as $imaname) {
                $imaname = getUserFolderName() . "/$imaname";
                $querypart .= "$comma('" . $usrid . "', '$imaname')";
                $comma = ",";
            }
            echo "INSERT INTO cover_images (userid, cover_image) VALUES $querypart"; 
            $this->db->query("DELETE FROM cover_images WHERE  userid = '$usrid'");
            $this->db->query("INSERT INTO cover_images (userid, cover_image) VALUES $querypart ");
             echo "INSERT INTO cover_images (userid, cover_image) VALUES $querypart"; 
        }
    }

    //Wizardseller ----------------------------------------------------------------- 
}

?>
