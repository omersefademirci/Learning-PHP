<?php 

    include "ayar.php";

    $query = "SELECT * FROM blogs";

    $result = mysqli_query($connect,$query);

    //tablo içerisinde satır lara erişim yapar
    $row = mysqli_fetch_row($result);

    echo $row[1]; # id
    echo $row[2]; # title

    mysqli_close($connect);

?>