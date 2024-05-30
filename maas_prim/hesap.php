
<?php
header('Content-Type: text/html; charset=utf-8');
 
$maas=$_POST['maas'];
$satis=$_POST['satis'];
$prim=0;
 
if ($satis>=0 && $satis<=1000)
 $prim= $satis *0.1; // $prim= $satis *10/100;
 
else if ($satis>1000 && $satis<=2000)
 $prim =$satis *0.2;

else if ($satis>2000)
 $prim = $satis *0.3;
 
echo "Prim :".$prim."<br>";
echo "Prim+Maaş :".($prim+$maas);
 
?>