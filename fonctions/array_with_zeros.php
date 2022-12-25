<?php

function zeros($number){
    $j=0;
  while ($number!=$j){
      for ($i=0;$i<=$j;$i++){
        echo '0';
      }
      echo '<br>';
      $j++;
  }
}

  zeros(15);