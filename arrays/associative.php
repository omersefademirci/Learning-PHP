<?php 

    #associative arrays
    #key-value => 41: Kocaeli, 34:İstanbul


    $plakalar = array("41",'34');
    $cities = array("Kocaeli","İstanbul");
    
    echo "$plakalar[0]:$cities[0]";
    echo "$plakalar[1]:$cities[1]";

    $plaka_bilgileri = array(
        "01" => "Adana",
        "41" => "Kocaeli",
        "34" => "İstanbul"
    );


    # Çok Boyutlu Dizileri

    $studentaA = array("Ömer Sefa Demirci",array(90,50,80));
    $studentaB = array("Emir Ballı",array(24,40,60));

    echo $studentaA[1][1].'<br>';


    $ogrenciC =  array(
                    "100" => array(
                        "name" => "Ömer Sefa",
                        "surName" => "Demirci",
                        "lessons" => array(
                            "matematik" => array(90,30),
                            "fizik" => array(90,30),
                        ),
                    ),
                    "101" => array(
                        "name" => "Faruk",
                        "surName" => "Akmil",
                        "lessons" => array(
                            "matematik" => array(90,30,40),
                            "fizik" => array(23,50,40),
                        ),
                    ),
                );


                echo $ogrenciC["100"]["lessons"]["matematik"][0];

?>