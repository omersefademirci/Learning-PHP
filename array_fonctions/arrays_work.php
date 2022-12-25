<?php
echo '<pre>';

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function myFonction($array,$value){



    #boşlukları otmatik siler
     $array_filterd=array_filter($array);
    #belli sayıda rast gele anahtar döner
     $array_rand=array_rand($array,$value);

    $new_array=array_map(function ($e)use($array_filterd){
        return $array_filterd[$e];
    },$array_rand);
    return $new_array;

}
echo '<pre>';
print_r(myFonction($planets, 2));
print_r(myFonction($planets, 3));
print_r(myFonction($planets, 4));