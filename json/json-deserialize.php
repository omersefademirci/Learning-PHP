<?php 

    /**
     * deserialize => string (json) => array
     
     */
    $jsonString = '{
        "firstname" : "Öme Sefa",
        "lastname"  : "Demirci",
        "hobbies"   : ["Spor","Sinema"],
        "age"       : 21,
        "childeren" : [
            {
                "firstname" : "Çınar",
                "age"       : 4
            }
        ] 
    }';

     echo $jsonString."<br>";

     $jsonArr = json_decode($jsonString, true); #assosiative array
     echo "<pre>";
     print_r($jsonArr);
     echo "</pre>";

     $myfile = fopen("person.json","r");
     $size = filesize("person.json");

     $jsonData = json_decode(fread($myfile,$size),true);

    echo "<pre>";
    print_r($jsonData);
    echo "</pre>";

?>