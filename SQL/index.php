<?php 

    //db bağlantı
    $connect = mysqli_connect('localhost','root','','blogapp');

    mysqli_set_charset($connect, "UTF8");

    //hata varsa 
    if(mysqli_connect_errno() > 0){
        die('hata: '. mysqli_connect_errno());
    }

    echo 'mysql bağlantısı yapıldı'.'<br>';

    //db yi kapatır
    mysqli_close($connect);

    echo "mysql kapatıldı";
?>