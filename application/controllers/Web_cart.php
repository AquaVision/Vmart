<?php
class Web_cart extends CI_Controller{
    
    function add(){
    
        $this->load->model('Product_model');
        $product = $this->Product_model->get($this->input->post('id'));
        $data = array(
               'id'      => $this->input-post('id'),
                'item_image' => $product->item_image,
                'name'    => $product->title,
                'price'   => $product->price,
                'qty'     => 1,
                
            );
        
        $this->cart->insert($data);
        redirect('Vmart');

    }
    function total(){
        
        echo $this->cart->total();
    }
    

    function show(){
        
        $cart = $this->cart->contents();
        $this->load->view('show_cart',$cart);
        
        
    }
    
    function remove($rowid){
        
        $data = array(
        'rowid' => $rowid,
        'qty'   => 0
        );
        $this->cart->update($data);
        echo 'item removed';
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


