<?php
/*  Dizi Fonksiyonları
 *  print_r()
 *      Bir değişkenin veya dizinin gösterimini ekrana basar.
 *
 * var dump()
 *      Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösteririr.
 *      Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gössterilir.
 *
 * explode()
 *      Bir dizgeyi bir ayara göre bölüp bir dizi haline getirir
 *
 * implode()
 *      Dizi elemanlarını birleştirip bir dizge elde eder.
 *
 * count()
 *      Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.
 *
 * is_array()
 *      Değişkenin bir dizi içerip içermediğine bakar.
 *
 * */


$arr=[1,2,3,4,5,6,7,8,9];

print_r($arr);

echo '<br>';

var_dump($arr);
echo '<br>';

$dizge=implode('=',$arr);

print_r($dizge);
echo '<br>';

$newarr=explode('=',$dizge);

print_r($newarr).'<br>';


echo count($newarr);

echo is_array($newarr);
