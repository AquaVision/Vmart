<?php

function get_date_time() {
    date_default_timezone_set('Asia/Colombo');
    $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());

    return $timestamp;
}

function getMessageJson($title, $message, $type) {

    $messagar = array(
        'title' => $title,
        'message' => $message,
        'type' => $type,
    );
    return json_encode($messagar);
}

function create_folder($path, $id) {
    $folder_name = md5($id . get_date_time());
    //create the folder if it's not already exists
    if (!is_dir($path . $folder_name)) {
        mkdir($path . $folder_name, 0755, TRUE);
    }
    return $folder_name;
}

function sendVmartEmail($to, $subject, $messagebody) {

    $CI = & get_instance();
    $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'testmail.pearson@gmail.com',
        'smtp_pass' => 'testmailpearson',
        'mailtype' => 'html',
        'charset' => 'iso-8859-1'
    );

    $CI->load->library('email', $config);
    $CI->email->set_newline("\r\n");

    $CI->email->set_mailtype('html');
    $CI->email->from("testmail.pearson@gmail.com");
    $CI->email->to($to);
    $CI->email->subject($subject);
    $CI->email->message($messagebody);
    return $CI->email->send();
}

?>
