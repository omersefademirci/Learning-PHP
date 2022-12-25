<?php

/*  Koşullar
 *
 * If
 * Else
 * ELSEIF
 * Ternary (üçlü operatör)
 *
 * */

$kosul =true;


$a=4;
$b=3;
if($a<$b){
    echo  "Koşul sağlandı";
}else{
    echo "Koşul Sağlanmadı";
}
echo "<br>";

#üçlü operatör

echo $a ==7 ? 'Eşit' : 'Eşit Değil';

if ($a ==7):
    echo 'Çalıştı';
endif;


if($a==1) echo "1.koşul";
elseif($a==2) echo "2.koşul";
else echo " else çalıştı";

