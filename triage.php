
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALGORITHME</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<h5><a href="function.php">SUIVANT</a></h5>
	<h5><a href="index.php">TABLEAU</a></h5>
	<h5><a href="arrondir.php">ARRONDISSEMENT</a></h5>
	<h5><a href="nbPremier.php">NOMBRE PREMIER</a></h5>
	<h5><a href="traduction.php">TRADUCTION</a></h5>
	 
	<?php 

	echo '<b>Triage des Nombres entiers par Decroissante: </b><br>';
	function decroissante(){
	$nb = [2,7,25,15,10,31,42,11,3,81];
	$maxi = max($nb);
	$res = [];
	for ($i=0; $i <count($nb); $i++) { 
		if ($maxi == true) {
			$maxi = max($nb);
			array_push($res,$maxi);
			unset($nb[array_search($maxi, $nb)]);
			$i --;
		}
	}	
	return $res;
}

	$a = decroissante();
	foreach ($a as $key => $value) {
		echo $value.'<br>';
	}?>





	<?php

	echo '<b>Triage des Nombres entiers par Croissante: </b><br>';
	function croissante(){
	$nb = [2,7,25,15,10,31,42,11,3,81];
	$mini = min($nb);
	$res = [];
	for ($i=0; $i <count($nb); $i++) { 
		if ($mini == true) {
			$mini = min($nb);
			array_push($res,$mini);
			unset($nb[array_search($mini, $nb)]);
			$i --;
		}
	}	
	return $res;
}

	$a = croissante();
	foreach ($a as $key => $value) {
		echo $value.'<br>';
	}

	?>	
</body>
</html>