<?php
/*

current(); Bir dizideki geçerli ögeyi döndürür.
end();  Bir dizinin dahili işaretçisini son elmanına ayarlar.
next(); Bir dizinin daihli işaretçisini ilerletir.
prev(); Dahili dizi işaretçisini geri alır.
reset(); Bir dizinin dahili göstercisini ilk elmana konumlar.

extract();  Bir dizideki değişkenleri simge tablosuna dahil eder.

asort();    Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe dogru sıralar.
arsort();   Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büükten küçüğe doğru sıralar.

ksort();    Bir dizini anahatlarına göre küçükten büyüğe doğru sıralar.
krsort();   Bir diziyi anahatlarına göre büyükten küçüğe doğru sıralar.

*/

echo '<pre>';
$dizi=[
    'bir'=>'araba',
    'iki'=>'bisiklet',
    'üç'=>'motor',
    'dört'=>'uçak',
    'beş'=>'tren'];

#işaretçi- dizinin ilk elemanı döner
echo current($dizi).'<br>';
#işaretçiyi ilerletiyoruz
echo next($dizi).'<br>';
#işaretçiyi sonuna ayarlar
echo end($dizi).'<br>';
#diznin keylerini değer olarak alıyor
extract($dizi);
echo $bir.'<br>';


