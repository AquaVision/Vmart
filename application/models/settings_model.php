<?php

class settings_model extends CI_Model {

    function getSettings(){
        
        $userd = $this->db->query("SELECT  fullname, email, username, PASSWORD, address,  joind_date, is_seller FROM  USER WHERE STATUS ='ACTIVE' && userid = ''");
        $userd = $this->db->query("select  profile_pic,  about_you, active_address, mobile_reach from  buyer where userid = ''");
    }

}

?>
