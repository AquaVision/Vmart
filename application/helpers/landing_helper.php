<?php

function get_formatted_rating($rating)
{
    $whole = floor($rating);
    $fraction = $rating - $whole;
    
    $rate_string = "fivestars_".$whole."_".$fraction;
    
    return $rate_string;
}

?>
