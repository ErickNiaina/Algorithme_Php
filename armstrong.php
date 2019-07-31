<!DOCTYPE html>
<html>
<head>
	<title>SOMME PAIRE</title>
	<meta charset="utf-8">
</head>
<body>
	<h5>ARMSTRONG</h5>
	<form method="POST" action="armstrong.php">
		<input type="number" name="nbre" min="100">
		<input type="submit" name="ok" value="AFFICHER">
	</form>
</body>
</html>
<?php 

if (isset($_POST['nbre'])) {
	$nb = $_POST['nbre'];

	function armstrong($a,$b,$n){
		return ($n * $n * $n) + ($a * $a * $a) + ($b * $b * $b);
	}
		$result = array_map('intval', str_split($nb));
			for ($i=0; $i <count($result) ; $i++) { 

				$res = armstrong($result[0],$result[1],$result[2]);
		    
		    }
	
      	if ($res == $nb) {
      		echo '<h6>'.$res.' '.' Numero  Armstrong'.'</h6>';
      	}
      	else{
      		echo '<h6>'.$res.' '.' Numero Pas Armstrong'.'</h6>';
      	}
         
             
}

	



?>