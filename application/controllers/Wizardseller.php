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

    function stepOneInWizard() {
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

    function stepTwoInWizard() {
        $meuindexes = array();
        $menuindx = $this->input->post("indexesz");
        if ($menuindx) {
            $meuindexes = $menuindx;
        }


        $totalmenu = array();


        for ($i = 0; $i < count($meuindexes); ++$i) {
            $menuinx = $meuindexes[$i];
            $navmenuitem = $this->input->post("hd$menuinx");

            $menuitem = $this->input->post("hd{$menuinx}it{$menuinx}");
            $menuitemxArray = array();
            for ($y = 0; $y < count($menuitem); ++$y) {
                $trimmedmneu = trim($menuitem[$y]);
                if ($trimmedmneu != '') {
                    $menuitemxArray[] = $menuitem[$y];
                }
            }
            $totalmenu[$navmenuitem] = $menuitemxArray;
        }

        $this->settings_model->createStore($totalmenu);
    }

    function uploadfiles() {
        $arrayax["files"] = $this->input->post("files");
        do_image_uploadByFileName(getUserFolder(), $arrayax);
    }

    function loadTest() {
        $this->load->view("TEST/Test");
    }
    
    function testcc(){
        echo $this->input->post("locationhidde",false);
    }

    public function upload() {
        error_reporting(E_ALL | E_STRICT);

        $this->load->helper("UploadHandler");
        $usrfolder = getUserFolderName();
        UploadHandler::$PathUrl= "assets/images/userdata/$usrfolder/";
        $upload_handler = new UploadHandler();
        

    }

}

?>
