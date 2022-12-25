<?php 

    $array1 = array('bmw','mercedes','renualt');
    $array2 = array('sefa' => 23, 'mercedes' => 24, 'renualt' => 12);
    $array1[4] = 'yeni';

    echo $array1[0].'<br>';
    echo $array1[1].'<br>';
    echo $array1[2].'<br>';
    echo $array1[4].'<br>';

    $marka = "bwm,toyata,mercedess";

    $marka2 = explode(",",$marka);

    echo $marka.'<br>';

    //Dizini kaç elemanlı olduğunu söyler
    echo count($array1);

    #azalan sırada
    rsort($array1);
    print_r($array1);
    arsort($array2); #value 
    krsort($array2); #key

    #artan sırada
    sort($array1);
    print_r($array1).'<br>';

    #value değerine göre sıralma
    asort($array2); #value 
    ksort($array2); #key
    print_r($array2).'<br>';

    #string to array
    $string = "Ömer|Sefa|Demirci|34";
    $arr = explode("|",$string);
    print_r($arr).'<br>';

    #array to string
    $arr = array("Ömer","sefa","Demirci");
    $string = implode(" ",$arr);
    print_r($string);

    #rastgele sıralama
    shuffle($arr);

    #dizi birleştirme
    $plakalar = array(41,34);
    $cities = array("Kocaeli",'İstanbul');
    
    $arr = array_combine($plakalar,$cities);
    print_r($arr);

    #Numeric Dizi Tanımalama
    $arr1 = ["İstanbul","Adana"];
    $arr2 = ["Kastamonu","Zonguldak"];

    $arr = array_merge($arr1,$arr2);

    #eleman tekrarlama saayıları
    $arr1 = ["İstanbul","Adana","İstanbul","Zonguldak","Kastamonu","Zonguldak"];
    $arr = array_count_values($arr1);
    print_r($arr);

    #dizinin sonuna eleman ekleme
    array_push($arr1,"Giresun");

    #dizinin başına eleman ekleme
    array_unshift($arr1,"Bartın");
    
?>