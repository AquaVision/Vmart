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
        'type' =>$type,
    );
    return json_encode($messagar);
}
function create_folder($path,$id){
        $folder_name = md5($id.get_date_time());
        //create the folder if it's not already exists
        if(!is_dir($path.$folder_name)) 
        {    
        mkdir($path.$folder_name,0755,TRUE);
        } 
        return $folder_name;
}

?>
