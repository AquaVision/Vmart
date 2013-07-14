<?php

class Membership_model extends CI_Model {

    function validate() {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('user');

        if ($query->num_rows == 1) {
            return true;
        }
        return false;
    }

    function create_member() {
        $joined_date = get_date_time();
        $new_member_insert_data = array(
            'full_name' => $this->input->post('full_name'),
            'email' => $this->input->post('email_address'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'status' => "created",
            'joined_date' => $joined_date,
            'is_seller' => 0,
        );

        $insert = $this->db->insert('user', $new_member_insert_data);
        $id = $this->db->insert_id();
        $new_seller_additional_data = array(
            'userid' => $id,
            'status' => "not_activated"
        );
        $this->db->insert('seller', $new_seller_additional_data);
        $new_buyer_additional_data = array(
            'userid' => $id,
        );
        $this->db->insert('buyer', $new_buyer_additional_data);

        return $insert;
    }

}
