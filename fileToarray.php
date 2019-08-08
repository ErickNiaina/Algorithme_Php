<?php 

/*$myfile = fopen("readtext/menu.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
  echo fgetc($myfile);
}

fclose($myfile);*/

$file = file_get_contents("readtext/menu.txt");

$res = explode("\;", $file,2);//vehicule sans moteur... et avec moteur...


//OPERATION ARRAY[0]
	$resA = explode(">", $res[0],3);//vehicule et sans moteur et velo + trotineete
		$resA1 = preg_replace ('#[^.0-9a-z]+#i', ' ', $resA[0]);
		$resA2 = preg_replace ('#[^.0-9a-z]+#i', ' ', $resA[1]);//Sans moteur
		$resA_1 = explode(";", $resA[2],2);//velo et trotinette

$array1 = [];
array_push($array1, $resA2);
$final = array_fill_keys($array1, $resA_1);//LASA CLE ILAY SANS MOTEUR
			

	$resB = explode(">", $res[1],2); //Avec  moteur et ......
		$resB_1 = explode(";", $resB[1],3);//voiture et camion et car
		$resB1 = preg_replace ('#[^.0-9a-z]+#i', ' ', $resB[0]);//Avec moteur
	$array = [];
	array_push($array, $resB1);//AVADIKA ARRAY LAY VALEUR AVEC ARRAY
	$finale = array_fill_keys($array, $resB_1);//AVADIKA CLE ANLAY voiture camion et car ILAY VALEUR "AVEC MOTEUR"
			
$vehicule = [];
$resfilter = preg_replace ('#[^0-9a-z]+#i',' ',$resA[0]);//MANALA ANREO CARACTERE SPECIAUX REETRA
array_push($vehicule, $resfilter);//POUSSENA ANATY VEHICULE AV EO
$sommeArray = array_merge($finale,$final);//AKAMBANA HO LASA ARRAY 1 LE ARRAY 2 REO
$array_vehicule = array_fill_keys($vehicule,$sommeArray);//POUSSENA ANATY VEHICULE HO LASA CLE ANANKIROA Avec MOTEUR sy SANS MOTEUR

foreach ($array_vehicule as $key => $value) {//MAKA ANLAY CLE VEHICULE FOTSINY
	echo '<h2>'.$key.'</h2>';
	ksort($value);
		foreach ($value as $key => $value1) {//MAKA ANLAY CLE AVEC ET SANS MOTEUR MAIS 2SONT VALEUR DE CLE VEHICULE
			echo '<b>'.$key.'</b>'.'<br>';
			asort($value1);
			foreach ($value1 as $key => $value2) {//MAKA ANLAY VALEUR ANATY CLE ANANKIROA
				$rez = preg_replace ('#[^0-9a-z]+#i',' ',$value2);
				echo $rez.'<br>';
			}
		}
}

?>
 

 