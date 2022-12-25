<?php 

    $array1 = array("IPhone 11:" => 7000, "IPhone 12:" => 9000, "Samsung S20:" => 8000);

    $array2 = array(
        array("IPhone 11:" => 7000),
        array("IPhone 12:" => 7000),
        array("Samsung S20:" => 8000),
    );

    echo $array1["IPhone 11:"].'<br>';


    $player1 = array(
        "ronaldo" => array(
            "name" => "Cristano Ronaldo",
            "yearOfBirth" => "1985",
            "nationalty" => "Portugal",
            "current_team" => "Portugal",
            "history" => array("Juventus","ReaLMadrid","Portugal"),
        ),
        "messi" => array(
            "name" => "Lionel Messi",
            "yearOfBirth" => "1987",
            "nationalty" => "Argentina",
            "current_team" => "Barcelona",
            "history" => array("Barcelona","Argentina","Portugal"),
        ),
       
    );

    print_r($player1["ronaldo"]);
    echo '<br>'.'<br>';
    print_r($player1["messi"]);




?>