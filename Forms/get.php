<?php

#hata görmek için
error_reporting(E_ALL);

echo "<pre>";

function filtre($e){
    return is_array($e) ? array_map('filtre',$e): htmlspecialchars(trim($e));
}
$array=array_map('filtre',$_GET);

print_r($array);
