<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function loadNavBar($usreid,$useridasseller,$sellerunique) {
    $CI = & get_instance();
    $CI->load->model('User_store_model');
   $datax = $CI->User_store_model->_getNavdata($usreid);
   $datax["useridasseller"] = $useridasseller;
   $datax["sellerunique"] = $sellerunique;
   return $datax;
}

?>
