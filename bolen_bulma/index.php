<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
 
<body>
<?php
$sayi=50;
$adet=0;
for($i=2;$i<=$sayi/2;$i++)
{
	if ($sayi%$i==0)
	{
		$bolenler[]=$i;
		$adet++;
	}
      
}
   
echo "<b>$sayi sayısının $adet adet Tam Böleni vardır.</b><br>";
for ($i=0;@$bolenler[$i];$i++)
   echo $bolenler[$i],"<br>";
?>
</body>
</html>