<?php
 
$gelir=$_POST['gelir'];
echo "Gelir:".$gelir."<br>";
 
if ($gelir<=12600)
{
    $vergi= $gelir*15/100;
}
else if ($gelir>12600 && $gelir<=30000)
{
   $fark=$gelir-12600;
   $vergi = 1890+$fark*20/100;
}
else if ($gelir>30000 && $gelir<=69000)
{
   $fark=$gelir-30000;
   $vergi=5370 + $fark*27/100;
}
else if ($gelir>69000 && $gelir<=110000)
{ 
   $fark = $gelir - 69000;
   $vergi= 15900 + $fark*35/100; 
}
else if ($gelir>110000)
{
   $fark= $gelir-110000;
   $vergi= 26970+$fark*35/100;
}
 
echo "Ödenecek Vergi :".$vergi;
?>