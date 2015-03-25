<?php

function inputHas($key) {
    if (isset($_REQUEST[$key])) {
        return true;
    } else {
        return false;
    }
    
}

function inputGet($key) {
    if (isset($_REQUEST[$key])) {
        return $_REQUEST[$key];
    } else {
        return false;
    }
    
}

function escape($input){
    return htmlentities(strip_tags($input));
}

?>