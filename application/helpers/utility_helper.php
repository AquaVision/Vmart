<?php

function get_date_time() {
    date_default_timezone_set('Asia/Colombo');
    $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());

    return $timestamp;
}

function get_curret_year() {
    return 2013;
}

function get_curret_month() {
    return 7;
}

function get_curret_date() {
    return 25;
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
        'smtp_user' => 'vmartlanka@gmail.com',
        'smtp_pass' => 'aquavision2012',
        'mailtype' => 'html',
        'charset' => 'iso-8859-1'
    );

    $CI->load->library('email', $config);
    $CI->email->set_newline("\r\n");

    $CI->email->set_mailtype('html');
    $CI->email->from("vmartlanka@gmail.com");
    $CI->email->to($to);
    $CI->email->subject($subject);
    $CI->email->message($messagebody);
    return $CI->email->send();
}

function do_image_upload($upload_path) {
    $filenames = array();
    //$file_name = md5(getUserID().get_date_time());
    $CI = & get_instance();
    $CI->load->library('upload');
    $config['upload_path'] = $upload_path;
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width'] = '1024';
    $config['max_height'] = '768';

    //$this->upload->initialize($config);
    $image_count = 0;
    foreach ($_FILES as $field => $file) {

        ++$image_count;
        $filename = md5(getUserID() . get_date_time() . $image_count);
        $config['file_name'] = $filename;
        $CI->upload->initialize($config);
        // No problems with the file
        if ($file['error'] == 0) {
            // So lets upload
            if ($CI->upload->do_upload($field)) {
                $data = $CI->upload->data();
                array_push($filenames, $data['file_name']);
            } else {
                $errors = $CI->upload->display_errors();
            }
        } else {
            echo 'There are some erros</br>';
        }
    }

    return $filenames;
}

// how to use
//$arraar["a"] = $_FILES["a"];
//$arraar["b"] = $_FILES["b"];
//do_image_uploadByFileName($path . "/abc", $arraar);

function do_image_uploadByFileName($upload_path, $imageArray) {
    $filenames = array();
    //$file_name = md5(getUserID().get_date_time());
    $CI = & get_instance();
    $CI->load->library('upload');
    $config['upload_path'] = $upload_path;
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width'] = '1024';
    $config['max_height'] = '768';

    //$this->upload->initialize($config);
    $image_count = 0;
    print_r($imageArray);
    foreach ($imageArray as $field => $file) {

        ++$image_count;
        $filename = md5(getUserID() . get_date_time() . $image_count);
        $config['file_name'] = $filename;
        $CI->upload->initialize($config);
        // No problems with the file
        if ($file['error'] == 0) {
            // So lets upload
            if ($CI->upload->do_upload($field)) {
                $data = $CI->upload->data();
                array_push($filenames, $data['file_name']);
            } else {
                $errors = $CI->upload->display_errors();
            }
        } else {
            echo 'There are some erros</br>';
        }
    }
    return $filenames;
}

function get_assets_path() {
    $CI = & get_instance();
    $path = $CI->config->item('userdatafolderpath');

    $full_path = base_url() . substr($path, 2) . "/";

    return $full_path;
}

function get_images_path() {
    $CI = & get_instance();
    $path = $CI->config->item('imagefolderpath');

    $full_path = base_url() . substr($path, 2) . "/";

    return $full_path;
}

function sendSms($textmessage, $to) {
    $user = "94778195095";
    $password = "8093";
    $text = urlencode($textmessage);

    $baseurl = "http://www.textit.biz/sendmsg";
    $url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
    $ret = file($url);


    $res = explode(":", $ret[0]);

    if (trim($res[0]) == "OK") {
        // echo "Message Sent - ID : " . $res[1];
        return true;
    } else {
        // echo "Sent Failed - Error : " . $res[1];
        return false;
    }
}


?>
