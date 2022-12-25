<?php

/*
 * Array Fonction 2
 *
 * shuffle()
 *      Bir diziyi karıştırır.
 *
 * array_combine()
 *      Anahtarlar için bir dizi,değerler için ise başka bir dizi kullanarak ilişkisel dizi oluşturur.
 *
 * array_count_balues()
 *      Bir dizideki anahtarlarla değerleri yer değiştirir.
 *
 * array_key_exists();
 *      Belirtilen anahtar veya indis dizide varmı diye bakar.
 *
 * array_map();
 *      Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.
 *
 * array_filter();
 *      Bir dizinin elemanlarını bir geriçağırım işleviyle süçgeçten geçirir.
 *
 * array_merge()
 *      Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur.
 *
 * array_rand();
 *      Bir diziden belli sayıda rasgele anahatar döndürür.
 *
 * array_reverse();
 *      Diziyi tersine sıralayıp döndürür.
 * */

echo "<pre>";
# 1 den 20 ye kadar dizi oluşturur
$numbers =range(1,20);
#diziyi karıştırır.
shuffle($numbers);
$meyve=['Meyve','Sebze','Bitki'];
$meyve2=['Meyve','Sebze','Bitki','Meyve','Sebze','Bitki'];
$icin=[1,2,3,];
print_r($numbers);
$dizi=array_combine($meyve,$icin);
print_r($dizi);

echo '<br>';

$meyves= array_count_values($meyve2);
print_r($meyves);

echo '<br>';

$harfler=['a','b','c','d'];
$harfdizisi=array_flip($harfler);
print_r($harfdizisi);

echo '<br>';

$harfdizisi2=array_key_exists(2,$harfler);
var_dump($harfdizisi2);

echo '<br>';

$numbers2=range(1,10);

$dizi2=array_map(function ($e){
    return $e+2;
},$numbers2);

print_r($dizi2);


echo '<br>';

$cift=array_filter($numbers2,function ($e){
    return $e % 2 == 0 ? $e : false;
});
print_r($cift);
echo '<br>';

$tek=array_merge($numbers2,$numbers);
print_r($tek);

echo '<br>';

$random=['r1','r2,','r3,'];

print_r(array_rand($random,2));