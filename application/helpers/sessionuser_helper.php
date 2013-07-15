<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('islogedUser')) {

    function islogedUser($session) {

        return $session->userdata('is_logged_in');
    }

}

function getUserID() {

    return 5;
}

function getUsername() {

    return "a";
}