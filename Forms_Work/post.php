<?php

error_reporting(E_ALL);

/*
function message($str="",$type="message"){

}
*/
function filtre($deger){
    $e=$deger['number'];

    $metin='Girilen Sayı:'.$e;

    $tam='Sayı Tam Bölünüyor.';
    $bos='Girilen Değer Yok!';
    if (isset($e)){

        if ($e ===""){
            echo $bos;
        }else{
            if($e % 3 === 0){
                echo $metin.'<br>'.$tam;
            }else{
                $afternumber=$e;
                $afternumber++;
                while ($afternumber % 3 !==0){
                    $afternumber++;
                }
                $bolunemez='Girdiğiniz Sayı'.$e."'e bölünemez.Bölünebilecek ilk sayı ".$afternumber."'dır.";
                echo $metin.'<br>'.$bolunemez;
            }
        }
    }
/*
    if ($e%3!=0 || $e==null || $e==' '){
        if ($e%3!=0)
            return print_r($metin);
    }
    return print_r($metin.'<br>'.$tam);
*/
    #return $e%3!=0 || $e==null || $e==' ' ?
}


echo filtre($_POST);


?>