<?php

class Web_cart extends CI_Controller {

    function add() {

        $id = $this->input->post('itemid');
        $this->load->model('Product_model');
        $product = $this->Product_model->get($id);
        $flag = 0;
        foreach ($this->cart->contents() as $cartitem) {
            if ($cartitem['id'] == $id) {
                $flag = 1;
                break;
            }
        }

        if ($flag == 0) {
            $data = array(
                'id' => $id,
                'item_image' => $product->item_image,
                'name' => $product->title,
                'price' => $product->price,
                'qty' => 1,
                'aval_qty' => $product->Qty
            );

            $this->cart->insert($data);
            echo count($this->cart->contents());
        } else {
            echo "-1";
        }
    }

    function add_specific_amt() {

        $id = $this->input->post('itemid');
        $amount = $this->input->post('item_amt');
        $this->load->model('Product_model');
        $product = $this->Product_model->get($id);

        $data = array(
            'id' => $id,
            'item_image' => $product->item_image,
            'name' => $product->title,
            'price' => $product->price,
            'qty' => $amount,
            'aval_qty' => $product->Qty
        );

        $this->cart->insert($data);
    }

    function total() {

        return $this->cart->total();
    }

    function show() {
        $total_amount = $this->total();
        $cart['cart_data'] = $this->cart->contents();
        $cart['cart_total'] = $total_amount;



        $this->load->view('show_cart', $cart);
    }

    function checkout() {

        if (!islogedUser()) {
            echo getMessageJson("", "You are not logged in, please log in before checkout!!", "ERROR");
        } else {

            $userId = getUserID();
            $cart['userId'] = $userId;
            $cart['checkout_data'] = $this->cart->contents();
            $this->load->model('product_model');
            $this->product_model->do_checkout($cart);
        }
        
        redirect("");
    }

    function remove($rowid) {

        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($data);
    }

    function update_qty($rowid, $qty) {
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );
        $this->cart->update($data);
    }

    function destroy() {
        $this->cart->destroy();
        echo 'destroied cart!!!';
    }

    function test($id) {
        $this->load->model('Product_model');
        $test_result = $this->Product_model->get($id);
        var_dump($test_result);
    }

}
?>  


