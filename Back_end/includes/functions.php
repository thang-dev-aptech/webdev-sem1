<?php

    if(!defined("_CODE")){
        die("Error");
    };
    


    function layouts($layoutName = 'header', $data = []){
        if(file_exists(_WED_PATH_TEMPLATE.'/layout/'.$layoutName.'.php')){
            require_once(_WED_PATH_TEMPLATE.'/layout/'.$layoutName.'.php');
        }
    }
?>