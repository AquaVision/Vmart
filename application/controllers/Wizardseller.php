<?php

class Wizardseller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('settings_model');
        $this->load->library('form_validation');
        $this->load->model('Add_item_model');
    }

    function index() {

        $select_data['vmart_categories'] = $this->Add_item_model->get_vmart_categories();
        $this->load->view('public_profile_seller', $select_data);
    }

    function VerifySellerInWizard() {
        $this->form_validation->set_rules('verificationcode', 'Verification code', 'callback_veficationchecker');
        $this->form_validation->set_rules("identity", "Identity check", "callback_selleridCallback");
        if ($this->form_validation->run() == FALSE) {
            $this->generalSellerSet();
        } else {
            $this->settings_model->addGeneralSellerSettings();
            redirect('settings/generalSellerSet');
        }






        if (true) {
            echo 'done';
        } else {
            echo 'failed';
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

}

?>
