<pre>
<?php
/*
    String Fonctiouns

strlen(#metin)  Verilen metnin uzunluğunu döndürür.

explode($ayırıcı,$metin)

implode($ayırı,$dizi)

str_slipt($metin,$sayi)

ltrim($metin), rtrim($metin), trim($metin)

substr($metin,$başlangıç,$uzunluk)

strtolower($metin), strtoupper($metin)

ucfirst($metin) , ucwords($metin)   Bu iki fonksyion sırasıyla verilen metnin ilk karakterini(ucfirst) ve metindeki her kelimenin ilk karakterini

str_replace($kaynek,$hedef,$metin) Verilen metindeki kaynak karakterlerin yerine hedef karakterleri koyarak değiştirme yapar. Bu fonksyion küçük

nl2br($metin) String ifadelerde kullanılan ve alt satıra geçmeyi sağlayan \n yerine kaynak kooda <br> yazmak için kullanılır

md5($metin), sha1($metin)   Sırasıyla aldığı metne karşılık gelen karmaşık md5 ve sha1 kodlarını verir.

strstr() Bir dizgede belirtilen karakterden sonrasını döndürür.
*/

$metin ='Ömer Sefa Demirci';


#metnin uzunluğu verir
echo strlen($metin);

#boşluklardan parçalayarak diziyi döndürür
print_r(explode(' ',$metin));

$yeni_metin=explode(' ',$metin);

#dizi olanı tekrar arasına tire koyarak birleştirir.
echo implode('-',$yeni_metin);

#verilen uzunluk byte cinsinden oldugu için Ö yi tek aldı, 2, 2 parçalayarak dizi hlainde döner

$yeni_metin_iki=str_split($metin,2);
print_r($yeni_metin_iki);

#başında ve sonundaki boşlukları temizler
$metin2 ='          Ömer Sefa Demirci         ';
echo strlen($metin2).' => Karakter'.'<br>';
echo strlen( trim($metin)).' => Karaktere Düştü'.'<br>';

#bir kısmı almamızı sağlar
echo substr($metin,2,8).'<br>';

#metin içerisindeki karakterleri büyük ve küçük yapmaya yarar

echo  strtolower($metin).'<br>';

echo strtoupper($metin).'<br>';

# HATALı
 #echo mb_strtoupper($metin,'UTF-8');


#metnin ilk harfini büyütür, kelimelerin ilk harfini büyütür

$new_text =ucfirst($metin).'<br>';
echo $new_text;
$new_text2=ucwords($metin);
echo $new_text2.'<br>';

#bir metinde değiştirelecek hedef,

$new_text3=str_replace('Ömer','Sefa',$metin);
echo $new_text3.'<br>';

#\n etiketini br ile değiştirir

$metin3="Ömer Sefa \n Demirci";

echo nl2br($metin3).'<br>';


#mbd5

$metin5='123456';

echo md5($metin5).'<br>';

echo sha1($metin5).'<br>';

#belirtilen textden böler  ve metni geri döner;
echo strstr($metin,'Sefa');

?>
</pre>