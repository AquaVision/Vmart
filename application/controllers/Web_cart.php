<?php
class Web_cart extends CI_Controller{
    
    function add(){
        
        $id = $this->input->post('itemid');
        $this->load->model('Product_model');
        $product = $this->Product_model->get($id);
       
        $data = array(
                'id'         => $id,
                'item_image' => $product->item_image,
                'name'    => $product->title,
                'price'   => $product->price,
                'qty'     => 1,
                
            );
        
        $this->cart->insert($data);
        

    }
    function total(){
        
        return $this->cart->total();
    }
    

    function show(){
        $total_amount = $this->total();
        $cart['cart_data'] = $this->cart->contents();
        $cart['cart_total'] = $total_amount;
        $this->load->view('show_cart',$cart);
        
        
    }
    
    function remove($rowid){
        
        $data = array(
        'rowid' => $rowid,
        'qty'   => 0
        );
        $this->cart->update($data);
        
    }


    

    function destroy(){
        $this->cart->destroy();
        echo 'destroied cart!!!';
    }
    
    
    
    function test($id){
        $this->load->model('Product_model');
        $test_result = $this->Product_model->get($id);
        var_dump($test_result);
        
    }
    
}

?>  


