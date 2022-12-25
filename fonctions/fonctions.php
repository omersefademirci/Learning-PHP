<?php
#hata yönetimi
error_reporting(E_ALL);
/*
function name(){
    echo 'Sefa';
}

$dizi=[
    2,3,4,5,6
];

$dizi=array_map(function ($e){
    return 2*$e;
},$dizi);

print_r($dizi);

*/
$categories=[
    [
        'id'=>1,
        'parent'=>0,
        'name'=>'Back-End'
    ], [
        'id'=>2,
        'parent'=>0,
        'name'=>'Front-End'
    ], [
        'id'=>3,
        'parent'=>0,
        'name'=>'Fullstack'
    ]
];

function getCategories($arr,$parr=0){
    $html="";

    $html .="<ul>";
    foreach ($arr as $value){
        if ($value['parent']==$parr){

            $html .='<li>';
            $html .=$value['name'];
            $html .=getCategories($arr,$value['id']);
            $html .='</li>';

        }



    }
    $html .="</ul>";

    return $html;
}
echo getCategories($categories,0);


function say(){
    static $sayi=0;

    echo $sayi;
    $sayi++;
    echo '<br>';
}
say();
say();
say();
say();

$isim='Sefa';
function isimyaz(){
    #dışarıdaki değere ulaşmaya saglama
    global $isim;
    echo $isim;
}
isimyaz();