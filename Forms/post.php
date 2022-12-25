<?php

error_reporting(E_ALL);
/*
$isim= trim($_POST["isim"]);
$soyisim=trim($_POST["soyisim"]);

echo $isim.' '.$soyisim;
*/

function filtre($p){
    return  is_array($p) ? array_map('filtre',$p): htmlspecialchars(trim($p));

}
$dizi=array_map('filtre',$_POST);
echo "<pre>";
print_r($dizi);
?>