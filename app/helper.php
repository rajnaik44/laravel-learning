<?php
// <!-- composer dump-autoload  ------terminal comment

// echo "hello";


//important function

if(!function_exists("p")){
    function p($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";

    }
}

if(!function_exists("get_formatted_date")){
    function get_formatted_date($date, $format = "Y-m-d"){
        $formattedDate = date($format, strtotime($date));
        return $formattedDate;

    }
}