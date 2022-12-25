<?php

for ($i=0;$i<=10;$i++){
    echo $i;
}

$dizi=[
    'Ahmet',
    'Mehmet',
    'Sefa',
    'Deniz'
];

for ($i=0;$i<=6;$i++){
    echo $dizi[$i].'<br>';
}

/***********************************************/

foreach ($dizi as $key => $value){
    echo $key.' - '.$value.'<br>';
}

/***********************************************/

