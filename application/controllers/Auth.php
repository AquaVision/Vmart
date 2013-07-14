<?php

class Auth extends CI_Controller {

    function index() {
        
    }

    function SignIn() {
        $this->load->helper('url');
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();

        if ($query) { // if the user's credentials validated...
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            redirect('Vmart');
        } else { // incorrect username or password
            return "incorrect password";
        }
    }

    function SignUp() {

        $this->load->model('membership_model');
        $this->membership_model->create_member();
    }

    function SignOut() {
        $this->session->sess_destroy();
        redirect('Vmart');
    }

    function CheckUserName() {
        $username = $this->input->post('username');
        if (trim($username)) {
            $this->db->where('username', $username);
            $query = $this->db->get('user');

            if ($query->num_rows == 1) {
                echo "false";
                return;
            }
            echo "true";
             return;
        }else{
           echo "false";
            return;
        }
    }

}

?>
