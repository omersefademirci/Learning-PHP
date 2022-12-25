<?php


$names =array();
$names2 = [];

echo gettype($names);

$names =array('Sefa','Aslan','Mehmet');

print_r($names);
/**************************************/
$isimler =[
    'isim1'=>"Sefa",
    'isim2'=>"Ömer"
];

echo $isimler['isim1'];

/**************************************/

#daha detaylı bir döküm sunar
var_dump($isimler);
echo "<br>";

echo "<pre>";
$hayvanlar =[
    'Uçan Hayvanlar' =>['Kartal','Güvercin','Kelebek'],
    'Sürüngen Hayvanlar'
];
print_r($hayvanlar);
