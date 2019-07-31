<!DOCTYPE html>
<html>
<head>
	<title>SOMME PAIRE</title>
	<meta charset="utf-8">
</head>
<body>
	<h5>FUNCTION RECURSIVE</h5>
	<form method="POST" action="functionType.php">
		<input type="number" name="nb" required='required'>
		<input type="submit" name="ok" value="VALIDER">
	</form>
</body>
</html>
<?php  
if (isset($_POST['nb'])) {
	$nbre = $_POST['nb'];
		function typage($nbre){
		   if ($nbre < 2) {
		   	return 1;
		   }else{
		   	return $nbre * typage(1);//si la 2e argument est > 2,boucle infinie
		   	                         //si la 2e argument est < 2,return valeur du 1er argument
		   }
	    }

	
	$a = typage($nbre);
	echo $a;

}  
?>