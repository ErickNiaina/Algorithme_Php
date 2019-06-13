<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALGORITHME</title>
	<link rel="stylesheet" type="text/css" href="cq.css">
</head>
<body>
<table>	
    <?php 
    $val = range(1,4);
    $a=array(1,2,3,4,5);
	$random_keys=array_rand($a,4);
   	$b = rand(1,4);
    	for ($i=0; $i <count($val) ; $i++) {?>
     			<tr>
	     			<?php 
		    		for ($j=0; $j <count($val); $j++) { ?>

	     			<td style="background-color: white">
	     				<?php 
	     				if ($a[$random_keys[$i]] <= 4) {
	     				 	echo $a[$random_keys[$i]];
	     				 	$a[$random_keys[$i]] += 1;
	     				 }elseif ($a[$random_keys[$i]] >= 5) {
	     				 	echo sprintf('%',$a[$random_keys[$i]]);
	     				 	$res = $a[$random_keys[$i]] = 1;
	     				 	echo $a[$random_keys[$i]];
	     				 	$res  += 1;
	     				 	$a[$random_keys[$i]] +=1;
	     				 }
	     				 		?>
	     			</td>
	     				<?php } ?>
	    		</tr>
	    		
    		<?php } ?>

  </table>


  </table>
</body>
</html>



