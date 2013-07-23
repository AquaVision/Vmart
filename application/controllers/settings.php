<?php

class settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('settings_model');
        $this->load->library('form_validation');

        // Your own constructor code
    }

    function index() {

        $this->load->view('public_profile_seller');
    }

    //-------------------- for profile settings

    

    function buyerSettings() {
        $this->load->view('public_profile_buyer');
    }

    function generalSettings() {
        
        if (islogedUser()) {
            $data = $this->settings_model->getSettings();
            $data["active1"] = "active";
            $data["active2"] = "";
            $data["rightbar"] = "GENERALSETTINGS";
            $this->load->view("public_profile_settings", $data);
        } else {
            redirect('Vmart', 'refresh');
        }
        // $this->load->view('public_profile_settings');
    }

    function generalSellerSet() {

        if (islogedUser()) {
            $data = $this->settings_model->getSettings();
            $data["active1"] = "";
            $data["active2"] = "active";

            $this->load->view("public_profile_settings", $data);
        } else {
            redirect('Vmart', 'refresh');
        }
    }

    private $changepass = false;

    function saveGeneralSettings() {

        //   if (isset($this->input->post('fullname'))) {

        $this->form_validation->set_rules('currentpass', 'Current Password', 'callback_passwordchange');

        if ($this->form_validation->run() == FALSE) {
            $this->generalSettings();
        } else {
            $imageArray["profileimagedd"] = $this->input->post("profileimagedd");
            $files = do_image_uploadByFileName(getUserFolder(), $imageArray);
            $querypart = "";
            if(count($files) > 0){
                $imagname = getUserFolderName()."/".$files[0];                
                $querypart = "profile_pic = '$imagname' , ";
            }
            
            $this->settings_model->saveGeneralSettings($this->changepass,$querypart);
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

    //------------------------------- save seller settings ----------------------------------------
    function SaveSellerSettings() {

        $this->form_validation->set_rules('verificationcode', 'Verification code', 'callback_veficationchecker');
        $this->form_validation->set_rules("identity", "Identity check", "callback_selleridCallback");
        if ($this->form_validation->run() == FALSE) {
            $this->generalSellerSet();
        } else {
            $this->settings_model->addGeneralSellerSettings();
            redirect('settings/generalSellerSet');
        }
    }

    

    function veficationchecker($str) {
        if (strlen(trim($str)) > 0) {
            $isverifiedNow = $this->settings_model->checkVerificationKey(trim($str));
            if ($isverifiedNow) {
                return true;
            }
            $this->form_validation->set_message('veficationchecker', 'Verification nuber you enterd is wrong, please do not fill it if you want other fields to saved');
            return false;
        } else {
            return true;
        }
    }

    function selleridCallback($str) {
        if ((trim($str) != "") && (preg_match("/^[a-zA-Z0-9]*$/", $str))) {
            if ($this->verifySellerId() == "ok") {
                return true;
            }
            $this->form_validation->set_message('selleridCallback', 'The seller id already exists');
            return false;
        } else {
            $this->form_validation->set_message('selleridCallback', 'The seller id can not be empty or it can only cantain alphaumaric words without spaces ');
            return false;
        }
    }

    function SaveSellerSetings() {
        $this->form_validation->set_rules("identity", "Identity check", "callback_selleridCallback");
        if ($this->form_validation->run() == FALSE) {
            $this->generalSellerSet();
        } else {
            $this->settings_model->addGeneralSellerSettings();
            redirect('settings/generalSellerSet');
        }
    }

    //------------------------------- save seller settings  END----------------------------------------

    
    
    
    //------------------------------- buyer settings  --------------------------------------------------
    
    
    //--------------------------------buyer END --------------------------------------------------------
    
    
    

    
    
    
    // -------------------------- verification functions --------------------------------------
    function sendVerificationNub() {
        $isverified = $this->settings_model->isVerifiedSeller();
        if (!$isverified) {


            $phone = $this->input->post("sellerphone");
            if ((strlen($phone) == 12) && (substr($phone, 0, 3) == "+94")) {

                $randnuber = rand(1000, 9999);
                $this->settings_model->addVerificationkey($randnuber, $phone);

                // $info = $this->nexmomessage->sendText($phone, 'Vmart Avision', $randnuber);
                // $status = $info->messages[0]->status;
                $textmessage ="Thank you For Registering with Vmart.lk Your Verification Code is : $randnuber";
                $status = sendSms($textmessage, $phone);
                if ($status) {
                    echo "Verification Code has been sent";
                } else {
                    echo "Unable to send the Verification code!!";
                }
            } else {
                echo "Wrong number format!!";
            }
        }
    }

    function verifySellerId() {
        if ($this->settings_model->verifysellerid()) {
            echo "ok";
            return true;
        } else {
            echo "notok";
            return false;
        }
    }
// -------------------------- verification functions  END--------------------------------------
}

?>
