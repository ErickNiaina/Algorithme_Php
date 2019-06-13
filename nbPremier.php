<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALGORITHME</title>
</head>
<body>
	<h5><a href="function.php">SUIVANT</a></h5>
	<h5><a href="index.php">TABLEAU</a></h5>
	<h5><a href="arrondir.php">ARRONDISSEMENT</a></h5>
	<h5><a href="triage.php">TRIAGE</a></h5>

	<form action="nbPremier.php" method="POST">
		<b>Nombre:</b>
		<input type="number" name="nb">
		<input type="submit" name="ok" value="Appliquer">
	</form><br>
	<?php 
	if (isset($_POST['nb'])) {
			$nombre = $_POST['nb'];
			$verif = true;
			if ($nombre == 2 || $nombre == 3) {
				$verif = false;
			}
				for ($i=3; $i<$nombre; $i++){
					if ($nombre%$i == 0 || ($nombre > 2) && ($nombre%2==0)){
						$verif = true;
						break;
					}
					else{
						$verif = false;
					}
				}
			if ($verif == true){
				echo $nombre.' '.'n\'est pas un nombre  premier';
			}
			elseif ($verif == false){
				echo $nombre.' '.'est un nombre premier';
			}
	}
	




	/*function  nbPremier() #MAKA  NY NOMBRE PREMIER REETRA 
							#AMBANIN 'NY $NB;
{
  	$nb = $_POST['nb'];
    $n = '';
    $diviseur = '';
    $nbe_diviseurs = '';
 
    for($n = 1 ; $n <= $nb ; $n++)
    {
        $nbe_diviseurs = 0;
       
        for($diviseur = 1 ; $diviseur <= $n ; $diviseur++)
        {
            if ($n % $diviseur == 0){
               $nbe_diviseurs++; 	
            }

        }
 
        if ($nbe_diviseurs == 2){
            echo $n.' ';
        }
    }
 
    return 0;
}
$res = nbPremier();
}*/
	 ?>
</body>
</html>