<?php

class Membership_model extends CI_Model {

    private $activation_code;

    function validate() {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('user');

        if ($query->num_rows == 1) {
            $userid = $query->row()->userid;
            return $userid;
        }

        return -1;
    }

    function loginSessionArray($userid) {

        $user = $this->db->query("select userid,full_name,email,username,userstatus,is_seller,sellerstatus,profile_pic,userfolder from forkeepinsession where userid = '$userid'");
        if ($user->num_rows() > 0) {
            return $user->row();
        }
    }

    function create_member() {
        $joined_date = get_date_time();
        $fulname = $this->input->post('full_name');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $new_member_insert_data = array(
            'full_name' => $fulname,
            'email' => $email,
            'username' => $username,
            'password' => md5($this->input->post('password')),
            'joined_date' => $joined_date,
            'is_seller' => 0,
            
        );

        $this->db->insert('user', $new_member_insert_data);
        $id = $this->db->insert_id();
        $new_seller_additional_data = array(
            'userid' => $id,
        );
        $this->db->insert('seller', $new_seller_additional_data);
        $new_buyer_additional_data = array(
            'userid' => $id,
        );
        $this->db->insert('buyer', $new_buyer_additional_data);
        
        //creating a folder for this user. 
        $path_dir = "assets/images/userdata/";
        $foldername=create_folder($path_dir, $id);
        $sql ="UPDATE user SET userfolder='".$foldername."' WHERE userid=".$id." LIMIT 1";
        $this->db->query($sql);
        
        
        if ($this->db->affected_rows() === 1) {
            $this->set_session($fulname, $username, $email);
            $this->send_verification_email();
            return $fulname;
        }
    }

    function set_session($fullname, $username, $email) {

        $sql = "SELECT userid,joined_date FROM user WHERE email ='" . $email . "'LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();
        $sess_data = array(
            'userid' => $row->userid,
            'fulname' => $fullname,
            'username' => $username,
            'email' => $email,
            'is_logged_in' => FALSE
        );
        $this->activation_code = md5((string) $row->joined_date);
        $this->session->set_userdata($sess_data);
    }

    function validate_email($email, $activation_code) {
        $sql = "SELECT email, joined_date FROM user WHERE email='{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();
        if ($result->num_rows() === 1 && $row->$fulname) {
            if (md5((string) $row->joined_date) === $activation_code)
                $result = $this->activate_account($email);
            if ($result === TRUE) {
                echo getMessageJson("", "Activation done!", "SUCCESS");
                return TRUE;
            } else {

                echo getMessageJson("", "Activation faild!, Please contact admin at " . $this->config->item('admin_email') . " ", "ERROR");
                return FALSE;
            }
        } else {

            echo getMessageJson("", "Validaton faild!, Please contact admin at " . $this->config->item('admin_email') . " ", "ERROR");
        }
    }

    function send_verification_email() {
        $this->load->library('email');
        $email = $this->session->set_userdata('email');
        $activation_code = $this->activation_code;

        $this->email->set_mailtype('html');
        $this->email->from($this->config->item('bot_email', 'VMART'));
        $this->email->to($email);
        $this->email->subject('Please activate your account at VMART');

        $message = '<!DOCTYPE html><html></head></body>';
        $message .='<p>Dear ' . $this->session->userdata('fulname') . ',</p>';
        $message .='<p>Thank you for registering on VMART! Please <strong><a href="' . base_url() . 'Auth/validate_email/' . $email . '/' . $activation_code . '">click here</a></strong> to activate your account. you will be able to log in to VMART and start doing your business!</p>';
        $message .='<p>Thank you!</p>';
        $message .='<p>The team at VMART</p>';
        $message .='</body></html>';
        $this->email->message($message);
        $this->email->send();
    }

    function activate_account($email) {
        $sql = "UPDATE user SET status = 'ACTIVATED' WHERE email ='" . $email . "'LIMIT 1";
        $this->db->query($sql);
        if ($this->db->affected_rows() === 1) {
            echo getMessageJson("", "Account has been activated successfuly!", "SUCCESS");
            return TRUE;
        } else {

            echo getMessageJson("", "Error activating your account in the database, please contact" . $this->config->item('admin_email'), "ERROR");
            return FALSE;
        }
    }

}
