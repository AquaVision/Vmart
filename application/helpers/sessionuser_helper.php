<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('islogedUser'))
{
    function islogedUser($session)
    {
        $data["imal"] = "imaaa95";
        $session->set_userdata($data);
        if($session->userdata('imal') == 'imaaa95'){
          return true;
        }
        return false;
    }
    
     
}