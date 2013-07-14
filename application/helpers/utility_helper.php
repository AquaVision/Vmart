<?php
function get_date_time(){
    date_default_timezone_set('Asia/Colombo');
    $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
    
    return $timestamp;
}

?>
