<?php
    $sayi = 5;
    $sonuc=1;
	
	for($i=2; $i<=$sayi ; $i++)     
		$sonuc = $sonuc * $i; 

	echo($sayi ." sayısının faktoriyeli : " .$sonuc);
?>