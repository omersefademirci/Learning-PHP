<?php 
    
    #serialize => array => json string

    $products = array("samsung 21","Iphone 11","Iphone 14 Pro Max");

    echo gettype($products);
    echo "<br>";
   # echo $products; # Notice : Array to string conversion

    $jsonString = json_encode($products);

    echo gettype($jsonString)."<br>";

    // $myfile = fopen("products.json","w");
    // fwrite($myfile,$jsonString);
    // fclose($myfile);

    $user = array(
        "username" => "omersefademirci",
        "password" => "1234",
        "name" => "Ömer Sefa Demirci"
    );

    // $jsonUser = json_encode($user);
    $jsonUser = json_encode($user,JSON_PRETTY_PRINT);
    $myfile = fopen("user.json","w");
    fwrite($myfile,$jsonUser);
    fclose($myfile);

?>