<?php

class settings extends CI_Controller {

    public function __construct()
       {
            parent::__construct();
             $this->load->model('settings_model');
            // Your own constructor code
       }
    
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

        if (islogedUser($this->session)) {
            $this->load->view("public_profile_settings", $this->settings_model->getSettings());
        } else {
            redirect('Vmart', 'refresh');
        }
        // $this->load->view('public_profile_settings');
    }

    private $changepass = false;

    function saveGeneralSettings() {

        //   if (isset($this->input->post('fullname'))) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('currentpass', 'Current Password', 'callback_passwordchange');

        if ($this->form_validation->run() == FALSE) {
            $this->generalSettings();
        } else {
            $this->settings_model->saveGeneralSettings($this->changepass);
            redirect('settings/generalSettings');
        }
        
    }

    function passwordchange($str) {
        $newpass = trim($this->input->post('newpassx'));
        $confirmnew = trim($this->input->post('confirmnewpass'));
        if ((trim($str) == "") && ( ($newpass != "") || ($confirmnew != "") )) {
            $this->form_validation->set_message('passwordchange', 'Password reset failed, please check your passwords');
            return FALSE;
        } else if ((trim($str) == "") && ( ($newpass == "") || ($confirmnew == "") )) {
            return TRUE;
        } else if (strlen(trim($str) > 0) && ($newpass == $confirmnew ) && (strlen($confirmnew) > 0)) {
            $this->changepass = true;
            return true;
        } else {
            $this->form_validation->set_message('passwordchange', 'Password reset failed, please check your passwords');
            return false;
        }

        return false;
    }

}

?>
