<?php

/*
    Array Fonctions 3
in_array(); Bir dizide  bir değerin varlığını araştırır.
array_shift(); Dizinin başlangıcından bir eleman çıkarır.
array_pop(); Dizinin sonundaki elemanı diziden çıkarır.
array_slice(9; Bir dizinin belli bir bölümünü döndürür.
array_sum(); Bir dizideki değerlerin toplamını hesaplar
array_product(); Bir dizideki değerlerin çarpımını bulur.
array_unique(); Diziden yenilenen değerleri siler.
array_values(); bir dizinin tüö değerlerini döndürür.
array_push(); Belli sayıda elemanı dizinin sonuna ekler.
array_unshift(); Bir dizinin başlangıcıına bir veya daha fazla eleman ekler
array_keys(); Bir dizideki tü anahatları eya bir anahtar altkümesini döndürür.
*/

$array=['Sefa','Feride','Deniz','Ömer'];

var_dump(in_array('Sefa',$array));
echo '<br>';
var_dump(in_array('Mehmet',$array));
echo '<pre>';
print_r($array);

$new_array=array_slice($array,0,2);
print_r($new_array);

#sonuna eklemeye yarar
array_push($array,'Aşk');
print_r($array);

$array[]='Son';

print_r($array);
