<?php

class Vmart_alt extends CI_Controller {

    public function index() {
     $data['cart_data'] = array(
            'abc' => array(
                        'id' => 1,
                        'name' => 'dinidu',
                        'price' => 50,
                    ),
            'pqr' => array(
                        'id' => 2,
                        'name' => 'kinath',
                        'price' => 100,
                    )
        );
        $this->load->view('show_cart',$data);
    }

}

?>
