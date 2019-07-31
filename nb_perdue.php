<!DOCTYPE html>
<html>
<head>
  <title>NB PERDUE</title>
  <meta charset="utf-8">
</head>
<body>
  <h5>RECHERCHE DES NOMBRES PERDUES ENTRE 2 TABLEAUX</h5>
  <?php 
 
    $tab_N =[0,1,3,4,7,6,9]; 
    $res = []; 

    for ($i=0; $i <10 ; $i++) { 
      array_push($res, $i);
    }
    $diff = array_diff($tab_N,$res);
    $diff1 = array_diff($res, $tab_N);
    $resultat = array_merge(array_diff_assoc($diff,$diff1),array_diff_assoc($diff1,$diff));

   foreach ($resultat as $key => $value) {
    echo $value.',';
   }
    
 
 ?>
</body>
</html>
