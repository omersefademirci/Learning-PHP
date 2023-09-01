<?php 

    include "ayar.php";

    $query = "INSERT INTO blogs(title,description,imageUrl,url,isActive) VALUES ('film 4','film 4 açıklama','3.jpeg','film-4',1)";

    $sonuc = mysqli_query($connect, $query);

    if($sonuc){
        echo "kayıt eklendi";
    }else{
         echo 'kayıt eklenemedi'; 
    }

?>