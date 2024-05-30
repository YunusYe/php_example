<?php
  $x = 0;
  $y = 1;
  $tekrar = 10;

  for($i=0 ; $i<=$tekrar ; $i++){    
      $z = $x + $y;
      echo ($z ."  ");
      $x = $y;
      $y = $z;
  }  
?>