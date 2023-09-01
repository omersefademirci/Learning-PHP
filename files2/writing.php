<?php 

   $myfile = fopen("filex.txt","a");

    $str = "Ömer Sefa Demirci";

    fwrite($myfile, $str);

    fseek($myfile,0);
    
   fclose($myfile);
?>