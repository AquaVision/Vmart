<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function getcurrentSession() {
    $CI = & get_instance();
    return $CI->session;
}

function islogedUser() {
    return getcurrentSession()->userdata('is_loged_in');
}

function getUserEmail() {

    return getcurrentSession()->userdata('udata')->email;
}

function getUserID() {

    return getcurrentSession()->userdata('udata')->userid;
}

function getUsername() {

    return getcurrentSession()->userdata('udata')->username;
}

function getUserStatus() {

    return getcurrentSession()->userdata('udata')->userstatus;
}

function getIs_user_seller() {

    return getcurrentSession()->userdata('udata')->is_seller;
}

function getseller_status() {

    return getcurrentSession()->userdata('udata')->sellerstatus;
}

function getprofilePic() {
    return getcurrentSession()->userdata('udata')->profile_pic;
}

function iswizardseller() {

    $wiz = getcurrentSession()->userdata('udata')->wizardseller;
    if ($wiz == 0) {
        return true;
    } else {
        return false;
    }
}

function getUserOrderCount() {
    return getcurrentSession()->userdata("ourdercount");
}

function getUserFolder() {
    $CI = & get_instance();
    $path = $CI->config->item('userdatafolderpath');
    return $path . (getcurrentSession()->userdata('udata')->userfolder);
}

function getUserFolderName() {
    return (getcurrentSession()->userdata('udata')->userfolder);
}


function setValue($session_key,$session_value){
    getcurrentSession()->set_userdata($session_key, $session_value);
}

