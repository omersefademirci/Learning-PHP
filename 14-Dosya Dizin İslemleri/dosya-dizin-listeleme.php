<?php 

/**
 * Dosya Dizin Listeleme
 */

$basedir = require 'settings.php';

/**
 * Taramak istenilen diziyi belirtme
 */

$array = scandir($basedir);


// print_r($array);
/**
 * glob fonksiyonu içerisinde bulunan her şeyi getirir.
 * Dosya yolu ile birlikte getiriyor. Tam url
 */
$array = glob($basedir.'/*');

// Php uzantı dosyaları getirir
$array = glob($basedir.'/*.php');


$dizi = array_map(function($e) use ($basedir){
    
    return str_replace($basedir.'/','',$e);

},$array);

echo "<pre>";

print_r($dizi);


function listAll($dir){

    $files = scandir($dir);

    echo "<ul>";

    foreach($files as $file ):
        if($file != '.' &&  $file != '..'){
            echo "<li>"; 
            if (is_dir($dir.'/'.$file)){
                listAll($dir.'/'.$file);
            };
            echo "</li>";
        }
        endforeach;

    echo "</ul>";
}

listAll($basedir);

echo "***********************************";

$array = glob($basedir.'/*.{php,txt.jpg,webp}', GLOB_BRACE);

echo "<pre>";

print_r($array);


//scandir() glob() Kullanımı


$files = scandir('.'); 
// Bulunduğumuz dizindeki tüm dosya ve klasörleri listeler.
$files = array_filter(scandir('.'), 'is_dir'); 
// Bulunduğumuz dizindeki sadece dosyaları listeler.
$files = glob('*'); 
// Bulunduğumuz dizindeki sadece dosyaları listeler.
$files = glob('*.php'); 
// Bulunduğumuz dizindeki sadece .php uzantılı dosyaları listeler.
$files = glob('*.{php,txt}', GLOB_BRACE);
// Bulunduğumuz dizindeki sadece .php uzantılı dosyaları listeler.


$files = glob('*', GLOB_ONLYDIR); 
// Bulunduğumuz dizindeki sadece dizinleri listeler.
function listAllDir($dir){
    $files = scandir($dir);
    echo "<ul>";
        foreach ($files as $file):
            if ($file != '.' && $file != '..'):
                echo "<li>";
                    echo !is_dir($dir.'/'.$file) ? $file : '<strong>'. $file . '</strong>';
                    if (is_dir($dir.'/'.$file)) {
                        listAllDir($dir.'/'.$file);
                    }
                echo "</li>";
            endif;
        endforeach;
    echo "</ul>";
}

listAllDir('../');