<?php 

function get($get){
    if(isset($_GET[$get])){
        return trim($_GET[$get]);
    }else{
        return false;
    }
}

function post($get){
    if(isset($_POST[$get])){
        return trim($_POST[$get]);
    }else{
        return false;
    }
}

function session($session){
    if(isset($_SESSION[$session])){
        return trim($_SESSION[$session]);
    }else{
        return false;
    }
}


function cook($cookie){
    
    if(isset($_COOKIE[$cookie])){
        return trim($_COOKIE[$cookie]);
    }else{
        return false;
    }
}


?>