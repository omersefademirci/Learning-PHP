<?php 


/**
 * Dosya Oluşturma
 * mkdir('b');
 * 
 * Dosya ismi değiştirme
 * rename('b','c');
 * 
 * Dosya yolunu değiştir
 * rename('c','b/c');
 * 
 * Text dosyası oluşturma
 * touch('test.txt');
 * 
 * İsmini değiştir ve dosya yolunu değiştir - True/False Değer döner
 * rename('test.txt','b/c/test2.txt');
 * 
 * 
 * 
 */

 $sonuc = rename('test.txt','yeni/test2.txt');
 if ($sonuc){
     echo 'Dosya başarıyla tekrar isimlendirildi.';
 }else{
     echo 'Bir hata oluştu';
 }