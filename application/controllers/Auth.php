<?php

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('membership_model');
    }

    function index() {
        redirect("Vmart");
    }

    function _chckOrderCount($userid) {


        $this->load->model('product_model');
        $orders = $this->product_model->get_new_orders($userid);
        return $orders;
    }

    function SignIn() {
        $this->load->helper('url');

        $userid = $this->membership_model->validate();
        if ($userid != -1) { // if the user's credentials validated...
            $userdata = array();
            $userdata["udata"] = $this->membership_model->loginSessionArray($userid);
            $userdata["is_loged_in"] = true;
            $userdata["ourdercount"] = $this->_chckOrderCount($userid);

            $this->session->set_userdata($userdata);
            redirect('');
        } else { // incorrect username or password
            return "incorrect password";
        }
    }

    function SignUp() {


        $this->form_validation->set_rules('full_name', 'Name', 'trim|xss_clean');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]|xss_clean');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo getMessageJson("", validation_errors('<p class="error">'), "ERROR");
        } else {
            echo getMessageJson("", "Registration Successfull!!", "SUCCESS");
            $this->membership_model->create_member();
        }
    }

    function validate_email($email, $activation_code) {
        $activation_code = trim($activation_code);
        $validated = $this->membership_model->validate_email($email, $activation_code);

        if ($validated === TRUE) {

            echo getMessageJson("", "" . $email . " is validated successfuly!", "SUCCESS");
        } else {

            echo getMessageJson("", "Error giving email activated confirmation, please contact, " . $this->config->item('admin_email') . "", "ERROR");
        }
    }

    function SignOut() {
        $this->session->sess_destroy();
        redirect('');
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
        } else {
            echo "false";
            return;
        }
    }

}

?>
