<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>www.yazilimkodlama.com</title>
<style>
	.kutu{
		width: 150px;
		color: white;
		font-size: 30px;
		text-align: center;
	}
	.sonuca{
		background-color: green;
	}
	.sonucb{
		background-color:darkgoldenrod;
	}
	.sonucc{
		background-color: #5C3F08;
	}
	.sonucd{
		background-color: #7F2208;
	}
	.sonuce{
		background-color: #F90004;
	}
	.sonucf{
		background-color: #2D0001;
	}
	</style>
</head>
<body>
<?php
	$not=95;
	if($not>=85 && $not<=100){
		$not2="A";
		$renk="sonuca";
	}
	else if($not>=70 && $not<85){
		$not2="B";
		$renk="sonucb";
	}
	else if($not>=60 && $not<70){
		$not2="C";
		$renk="sonucc";
	}
	else if($not>=50 && $not<60){
		$not2="D";
		$renk="sonucd";
	}
	else if($not>=0 && $not<50){
		$not2="E";
		$renk="sonuce";
	}
	else{
		$not2="F";
		$renk="sonucf";
	}
?>
<div class="<?php 
			echo("kutu $renk");
			?>">	
		<?php
		echo($not." >> ".$not2);
	?>
</div>
</body>
</html>
 