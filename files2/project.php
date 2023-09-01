<?php 

    function file_register($file, $productName, $price){
        
        $myfile = fopen($file, "a");
        $content = $productName.'|'.$price;
        fwrite($myfile, $content."\n");
        fclose($myfile);
    }
    function file_read($file){

        $myfile = fopen($file,"r");
        $list = [];

        while (($line = fgets($myfile)) !== false) {
            
            $text =  explode("|",$line);
            echo $line."<br>";
            array_push($list,[$text[0], $text[1]]);
        }
        
        fclose($myfile);
        return $list;
    }

    file_register("file.txt","I Phone 14 Pro Max","5200");
    file_register("file.txt","I Phone 11 Pro ","503400");
    file_register("file.txt","I Phone 12 Mini","50060");

    $icerik = file_read("file.txt");

    foreach ($icerik as $line) {
        echo $line[0]." ".$line[1]."<br>";
    }

?>