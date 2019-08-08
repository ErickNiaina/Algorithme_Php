<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALGORITHME</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<h5><a href="function.php">SUIVANT</a></h5>
	<h5><a href="triage.php">TRIAGE</a></h5>
	<h5><a href="arrondir.php">ARRONDISSEMENT</a></h5>
	<h5><a href="nbPremier.php">NOMBRE PREMIER</a></h5>
	<h5><a href="traduction.php">TRADUCTION</a></h5>
	<h5><a href="nb_perdue.php">NOMBRE PERDU</a></h5>
	<h5><a href="sommePaire.php">COORDONEE</a></h5>
	<h5><a href="functionType.php">RECURSIVE</a></h5>
	<h5><a href="armstrong.php">CUBE</a></h5>
	<h5><a href="fileToarray.php">FILE ARRAY</a></h5>
	<form action="index.php" method="POST">
		<b>Colonne :</b> <input type="number" name="col"><br>
		<b>Ligne : </b><input type="number" name="line"><br>
		<input type="submit" name="Valider" value="Appliquer">
	</form><br> 


	<?php
	if (isset($_POST['col']) || isset($_POST['line'])) {
		$col = $_POST['col'];
		$ligne = $_POST['line'];
	
	
	?>
	<table class="table table-bordered">	
    <?php 
    	for ($i=0; $i <$ligne ; $i++) {

     		if ($i % 2 == 0 ) { ?>
     			<tr>
	     			<?php 
		    		for ($j=0; $j <$col ; $j++) { 
		    			if ($j % 2 == 0 ) { ?>
	     			
	     				<td style="background-color: white"></td>
	     			
	    		 	<?php } else { ?>
	     				<td style="background-color: black"></td>
	     			
		    		<?php } } ?>
	    		</tr>

    		<?php } 

     		if ($i % 2 !== 0 ) { ?>
     			<tr>
	     			<?php 
		    		for ($j=0; $j <$col ; $j++) { 
		    			if ($j % 2 !== 0 ) { ?>
	     			
	     				<td style="background-color: white"></td>
	     			
	    		 	<?php } else { ?>
	     				<td style="background-color: black"></td>
	     			
		    		<?php } } ?>
	    		</tr>

    		<?php } }?>

  </table>


<?php } ?>

</body>
</html>


