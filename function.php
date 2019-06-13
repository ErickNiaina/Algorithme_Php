<h5><a href="index.php">TABLEAU</a></h5>
<h5><a href="triage.php">TRIAGE</a></h5>
<h5><a href="arrondir.php">ARRONDISSEMENT</a></h5>
<h5><a href="nbPremier.php">NOMBRE PREMIER</a></h5>
<h5><a href="traduction.php">TRADUCTION</a></h5>
<form method="POST" action="function.php">
	Montant:<input type="number" name="or" min="5000" max="150000">
	<input type="submit" name="btn" value="valider">
</form>
<?php 

if (isset($_POST['or'])) {
	$montantBillet = [5000,10000,20000];
	$mini = min($montantBillet);
	$maxi = max($montantBillet);
	$egaux = 10000;
	$money = $_POST['or'];
	$Billet5 = 1;
	$Billet10 = 0;
	$Billet20 = 0;
	if ($money % 5000 == 0) {
		$besoin = $money - $mini;
	
		
		for ($i=0; $i <count($besoin) ; $i++) { 
			if ($besoin >= $maxi) {
				$Billet20 += 1;
				$reste = $besoin - $maxi;
				
				if ($reste >= $maxi) {
					$Billet20 += 1;
					$result = $reste - $maxi;
					
					if ($result >= $maxi) {
						$Billet20 += 1;
						$res = $result - $maxi;	
						
						if ($res >= $maxi) {
							$Billet20 += 1;
							$r = $res - $maxi;
							
							if ($r >= $maxi ) {
								$Billet20 += 1;
								$s = $r - $maxi;
								
								if ($s >= $maxi) {
									$Billet20 += 1;
									$se = $s - $maxi;
									
									if ($se >= $maxi) {
										$Billet20 += 1;
										$ses = $se - $maxi;
										}	
								}
							}
							if ($r >= $egaux && $r < $maxi) {
								$Billet10 += 1;
								$s = $r - $egaux;
							}
							if ($r >= $mini) {
								$Billet5 += 1;
								$s = $r - $mini;
							}
						}
						if ($res >= $egaux && $res < $maxi ) {
								$Billet10 += 1;
								$r = $res - $egaux;
							if ($r >= $mini && $r < $egaux) {
								$Billet5 += 1;
								$s = $r - $mini;
							}
							}	
						if ($res >= $mini && $res < $egaux) {
							$Billet5 += 1;
							$r = $res - $mini;
						}
					}


					if ($result >= $egaux && $result < $maxi) {
						$Billet10 += 1;
						$res = $result - $egaux;	
						if ($res >= $mini && $res < $egaux) {
							$Billet5 += 1;
							$result = $res - $mini;
						}
					}

					if ($result >= $mini && $result < $egaux) {
						$Billet5 += 1;
						$res = $result - $mini;		
					}		
				}

				if ($reste >= $egaux && $reste < $maxi) {
					$Billet10 += 1;
					$result = $reste - $egaux;
					if ($result >= $maxi) {
						$Billet20 += 1;
						$res = $result - $maxi;
					}
					if ($result >= $egaux && $result < $maxi) {
						$Billet10 += 1;
						$res = $result - $egaux;
					}
					if ($result >= $mini && $result < $egaux) {
						$Billet5 += 1;
						$res = $result - $mini;
					}
				}

				if ($reste >= $mini && $reste < $egaux) {
					$Billet5 += 1;
					$result = $reste - $mini;
				}
			}
			if ($besoin >= $egaux && $besoin < $maxi) {
				$Billet10 += 1;
				$res = $besoin - $egaux;
				if ($res >= $mini && $res < $egaux) {
					$Billet5 += 1;
					$result = $res - $mini;
				}
			}
			if ($besoin >= $mini && $besoin < $egaux) {
				$Billet5 += 1;
				$res = $besoin - $mini;
			}
		}
		echo 'Billet cinqMille :'.$Billet5.'<br>'; 
		echo 'Billet dixMille :'.$Billet10.'<br>'; 
		echo 'Billet VingtMille :'.$Billet20.'<br>'; 
		}
	else{
		echo 'Erreur de montant à retirer!!!';
	}
	}
	/*$cinqMille = 5000;
	$dixMille = 10000;
	$vingtMille = 20000;
	$aRetirer = $_POST['or'];
	$nbCinqMille = 0;
	$nbResteCinqMille = 0;
	$nbVingtMille = 0;
	$nbDixMille = 0;
	if ($aRetirer >= 20000) {
		$aRetirer = $aRetirer - 10000;
		$nbResteCinqMille = 2;
	} else {
		$aRetirer = $aRetirer - 5000;
		$nbResteCinqMille = 1;
	}

	if ($aRetirer >= $vingtMille) {
		$nbVingtMille = intval($aRetirer / $vingtMille);
		$resteVingtMille = $aRetirer % $vingtMille;
		if ($resteVingtMille >= $dixMille) {
			$nbDixMille = intval($resteVingtMille / $dixMille);
			$resteDixMille = $resteVingtMille % $dixMille;
			if ($resteDixMille >= $cinqMille) {
				$nbCinqMille = intval($resteDixMille / $cinqMille);
			}
		}  elseif ($resteVingtMille >= $cinqMille) {
			$nbCinqMille = intval($resteVingtMille / $cinqMille);
		}
	} elseif ($aRetirer >= $dixMille) {
		$nbDixMille = intval($aRetirer / $dixMille);
		echo $nbDixMille;
		$resteDixMille = $aRetirer % $dixMille;
		if ($resteDixMille >= $cinqMille) {
			$nbCinqMille = intval($resteDixMille / $cinqMille);
		}
	}

	echo 'Vingt Mille: ' . $nbVingtMille . ' Dix Mille : '. $nbDixMille .' Cinq Mille: '. ($nbCinqMille + $nbResteCinqMille) ;
	
}*/


