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

function do_image_upload($upload_path)
{
    
    //$file_name = md5(getUserID().get_date_time());
    $CI = & get_instance();
    $CI->load->library('upload');
    $config['upload_path'] = $upload_path;
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';

    //$this->upload->initialize($config);
    $image_count = 0;
    foreach($_FILES as $field => $file)
    {
        ++$image_count;
        $filename = md5(getUserID().get_date_time().$image_count);
        $config['file_name'] = $filename;
        $CI->upload->initialize($config);
        // No problems with the file
        if($file['error'] == 0)
        {
            // So lets upload
            if ($CI->upload->do_upload($field))
            {
                $data = $CI->upload->data();
            }
            else
            {
                $errors = $CI->upload->display_errors();
                print_r($errors);
            }
        }
        else
        {
            echo 'There are some erros</br>';
        }
    }
}

?>
