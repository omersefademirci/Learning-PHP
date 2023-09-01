<?php 

/**
 *  fopen("file_name","file open mode");
 * 
 *  file open modes
 * 
 *  r  : Dosya okuma modunda oçulur. İmleç dosyanın başında yer alır.
 *  w  : Dosya yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tümveriler silinir.
 *  a  : Dosya yazma modunda açılır. İmleç dosya sonundadır. Dosya ekleme yapılır. Dosya konumda yoksa oluşturulur.
 *  x  : Dosya yazma modunda açılır. Dosya yoksa oluşturulur, var "False" döner.
 * 
 *  r+ : Dosya okuma ve yazma modunda açılır. İmleç dosyanın başında yer alır.
 *  w+ : Dosya okuma ve yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tüm ve
 *  a+ : Dosya yazma ve okuma modunda açılır. İmleç dosya sonundadır. Dosyaya ekleme yapılır. Dosya konumda yok
 *  x+ : Dosya okuma ve yazma modunda açılır. Dosya yoksa oluşturulur, varsa "false" döner.
 * 
*/
 
    //Dosya okuma ve sonunda kaç bite olduğunu gösterir. Her bir karakter 1 byte
    // echo readfile("filex.txt");

    //  Dosyayı okuma modunda açar
    $myfile = fopen("filex.txt","r");
    
    //  Dosyanın kaç byte olduğunu bulur
    $size = filesize("filex.txt");

    // echo fread($myfile,5);

    //  Her çalıştırıldığında satır olarak gelir
    // echo fgets($myfile);

    //  feof fonksiyonu dosya sonuna gelip gelmediğimizi kontrol eder.
    while (!feof($myfile)) {
        echo fgetc($myfile);
    }

    //  Açılan objeyi kapatma
    fclose($myfile);

?>