<!DOCTYPE html>
<html>
<head>
	<title>SOMME PAIRE</title>
	<meta charset="utf-8">
</head>
<body>
	<h5>COORDONNEE DU CHIFFRE</h5>
	<form method="POST" action="sommePaire.php">
		<input type="number" name="chiffre" required='required'>
		<input type="submit" name="ok" value="COORDONNEE">
	</form>
</body>
</html>
<?php 


	

if (isset($_POST['chiffre'])) {

	$somme = $_POST['chiffre'];

	$nb = [1,2,3,4,5,6,7,8,9,10];


	if ($somme <= 1) {
			echo $somme." "."=";
			echo $somme."+". "0";
		}
	
	for ($i=0; $i <count($nb) ; $i++) { 
		
		$result  = $nb[$i] + $nb[$i]+1;

			if ($result == $somme) {
				if ($somme == 3 || $somme == 5 || $somme == 7 || $somme == 9) {
					echo $somme.' '.'='.' ';
					echo $nb[$i].' '.'+'.' ';
					echo $nb[$i]+1;
					echo '<hr>';
					/*if ($somme > 5) {
				 			 $i--;
				  			 $resu = $nb[$i] + $nb[$i]+2;
						if ($resu == $somme) {
								echo $somme.' '.'='.' ';
							    echo $nb[$i].' '.'+'.' ';
							    echo $nb[$i]+2;
						    $i++;
						}
					}*/
					
				}
			}

			
			elseif ($result == $somme) {
				echo $somme.' '.'='.' ';
				echo $nb[$i].' '.'+'.' ';
				echo $nb[$i]+1;
				echo '<hr>';
				if ($somme >= 4) {
			 			 $i--;
			  			 $resu = $nb[$i] + $nb[$i]+2;
					if ($resu == $somme) {
							echo $somme.' '.'='.' ';
						    echo $nb[$i].' '.'+'.' ';
						    echo $nb[$i]+2;
					$i++;
					}
				}
			}



		elseif ($result != $somme) {
			$result = $nb[$i] + $nb[$i];
			if ($result == $somme) {
				echo $somme.' '.'='.' ';
			    echo $nb[$i].' '.'+'.' ';
			    echo $nb[$i];
			    echo '<hr>';
			    if ($somme >= 4) {
			 			 $i--;
			  			$resu = $nb[$i] + $nb[$i]+2;
					if ($resu == $somme) {
							echo $somme.' '.'='.' ';
						    echo $nb[$i].' '.'+'.' ';
						    echo $nb[$i]+2;
						    break;
					}
				}
			}
		}

		/*if ($result != $somme) {
			$i = 0;
			$result = $nb[$i] + $nb[$i] + 2;
			if ($result == $somme) {
				echo $somme.' '.'='.' ';
			    echo $nb[$i].' '.'+'.' ';
			    echo $nb[$i] + 2;
			    break;
			}
			if ($result < $somme && $result =! $somme) {
				echo 'valeur inconnue';
				break;
			}
		}*/	
}
}
	
 ?>