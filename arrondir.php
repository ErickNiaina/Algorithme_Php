<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALGORITHME</title>
</head>
<body>
	<h5><a href="function.php">SUIVANT</a></h5>
	<h5><a href="triage.php">TRIAGE</a></h5>
	<h5><a href="index.php">TABLEAU</a></h5>
	<h5><a href="nbPremier.php">NOMBRE PREMIER</a></h5>
	<h5><a href="traduction.php">TRADUCTION</a></h5>
	

	<form action="arrondir.php" method="POST">
		<b>Chiffre :</b><input type="number" name="num"  min="1000">
		<input type="submit" name="ok" value="Arrondir">
	</form>

<?php 
if (isset($_POST['num'])) {


	function arrondir(){
	$chiffre[] = $_POST['num'];
	$res = [];
	foreach ($chiffre as $key => $valueChiff) {

		if ($valueChiff >= 1000 && $valueChiff < 10000) {
			$n[] = substr($valueChiff,1);
			$arr[] = "000";
			$rep = array_replace($n,$arr);
			foreach ($rep as $key => $replace) {}
			foreach ($n as $key => $Nb) {
				if ($Nb < 500) {
					$total = substr($valueChiff,0,1);
					array_push($res,$total,$replace);
					return $res;
				}
				if ($Nb >= 500) {
					$total = substr($valueChiff,0,1) + 1;
					array_push($res,$total,$replace);
					return $res;
				}
			}
		}

		if ($valueChiff >= 10000 && $valueChiff < 100000) {
			$n[] = substr($valueChiff,2);
			$arr[] = "000";
			$rep = array_replace($n,$arr);
			foreach ($rep as $key => $replace) {}
			foreach ($n as $key => $Nb) {
				if ($Nb < 500) {
					$total = substr($valueChiff,0,2);
					array_push($res,$total,$replace);
					return $res;
				}
				if ($Nb >= 500) {
					$total = substr($valueChiff,0,2) + 1;
					array_push($res,$total,$replace);
					return $res;
				}
			}
		}

		if ($valueChiff >= 100000 && $valueChiff < 1000000) {
			$n[] = substr($valueChiff,3);
			$arr[] = "000";
			$rep = array_replace($n,$arr);
			foreach ($rep as $key => $replace) {}
			foreach ($n as $key => $Nb) {
				if ($Nb < 500) {
					$total = substr($valueChiff,0,3);
					array_push($res,$total,$replace);
					return $res;
				}
				if ($Nb >= 500) {
					$total = substr($valueChiff,0,3) + 1;
					array_push($res,$total,$replace);
					return $res;
				}
			}
		}

		if ($valueChiff >= 1000000) {
			for ($i=0; $i <count($valueChiff) ; $i++) { 
				$n[] = substr($valueChiff,4);
				$arr[] = "000";
				$rep = array_replace($n,$arr);
				foreach ($rep as $key => $replace) {}
				foreach ($n as $key => $Nb) {
					if ($Nb < 500) {
						$total = substr($valueChiff,0,-3);
						array_push($res,$total,$replace);
						
					}
					if ($Nb >= 500) {
						$total = substr($valueChiff,0,4)+1;
						array_push($res,$total,$replace);	
					}
				}
				return $res;
			}
		}

	}	
}

	$a = arrondir();
	foreach ($a as $key => $value) {
		echo $value;
	}
}

 ?>
</body>
</html>