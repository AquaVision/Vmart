<?php

class settings extends CI_Controller {

    public function __construct() {
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

        if (islogedUser()) {
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
            if ($this->settings_model->checkpassword(trim($str))) {
                if ((strlen($newpass) >= 4) && (strlen($newpass) <= 32)) {
                    $this->changepass = true;
                    return TRUE;
                } else {
                    $this->form_validation->set_message('passwordchange', 'Password should be greater than 4 but less than 32');
                    return false;
                }
            } else {
                $this->form_validation->set_message('passwordchange', 'Password reset failed, password you entered is wrong');
                return false;
            }


            return true;
        } else {
            $this->form_validation->set_message('passwordchange', 'Password reset failed, please check your passwords');

            return false;
        }

        return false;
    }

    function SaveSellerSettings() {

        $mobilenumber = $this->input->post();
        $verifynub = $this->input->post();
        if ($mobilenumber || $verifynub) {
            
        }
    }

    function sendVerificationNub() {
        $isverified = $this->settings_model->isVerifiedSeller();
        if (!$isverified) {
            $randnuber = rand(1000, 9999);
            $this->settings_model->addVerificationkey($randnuber);
            
            $phone = $this->input->post("sellerphone");
            if ((strlen($phone) == 12) && (substr($phone, 0, 3) == "+94")) {
               // $info = $this->nexmomessage->sendText('+9471573585', 'Vmart', $randnuber);
               // $status = $info->messages[0]->status;
                $status = 0;
                if ($status != 0) {
                    echo "Verification Code has been sent";
                } else {
                    echo "Unable to send the Verification code!!";
                }
            } else {
                echo "Wrong number format!!";
            }
        }
    }

}

?>
