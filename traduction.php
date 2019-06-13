<!DOCTYPE html>
<html>
<head>
    <title>ALGORITHME</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="cq.css">
</head>
<body>
  <h5><a href="function.php">SUIVANT</a></h5>
	<h5><a href="index.php">TABLEAU</a></h5>
	<h5><a href="arrondir.php">ARRONDISSEMENT</a></h5>
	<h5><a href="triage.php">TRIAGE</a></h5>
  <h5><a href="nbPremier.php">NOMBRE PREMIER</a></h5>
    <?php 

    $lettreMlg = [
                'un'=>'iray','deux'=>'roa','trois'=>'telo','quatre'=>'efatra','cinq'=>'dimy','six'=>'enina','sept'=>'fito','huit'=>'valo','neuf'=>'sivy','dix'=>'folo','onze'=>'iraika ambinifolo','douze'=>'roa ambinifolo',
                'treize'=>'telo ambinifolo','quatorze'=>'efatra ambinifolo','quinze'=>'dimy ambinifolo','seize'=>'enina ambinifolo','dix-sept'=>'fito ambinifolo','dix-huit'=>'valoambinifolo',
                'dix-neuf'=>'sivy ambinifolo','vingt'=>'roapolo'
            ];

    $lettreEng = [
              'un'=>'one','deux'=>'two','trois'=>'three','quatre'=>'four','cinq'=>'five','six'=>'six','sept'=>'seven','huit'=>'eight','neuf'=>'nine','dix'=>'ten','onze'=>'eleven','douze'=>'twelve','treize'=>'thirteen','quatorze'=>'fourteen','quinze'=>'fifteen',
              'seize'=>'sixteen','dix-sept'=>'seventeen','dix-huit'=>'eighteen','dix-neuf'=>'nineteen','vingt'=>'twenty'
             ];

     ?>
    <form method="POST" action="traduction.php">
          <p>Veuillez choisir la meilleure méthode pour vous traduisez :</p>
          <b>Lettre :</b><input type="text" name="num" placeholder="inserez une lettre de 1 à 20"><br><br>
            <input type="radio" id="contactChoice2"
             name="trad" value="MLG">
            <label for="mlg">MALGACHE</label>

            <input type="radio" id="contactChoice3"
             name="trad" value="ENG">
            <label for="eng">ENGLISH</label>
          </div>
          <div><br>
            <button type="submit"><b>Traduire</b></button>
          </div>
    </form>

    <?php 

        if (isset($_POST['num'])  && isset($_POST['trad'])) {
            $lettre = $_POST['num'];
            $traduct = $_POST['trad'];

           if ($traduct == 'MLG') {
              foreach ($lettreMlg as $key => $value) {
                if ($key == $lettre) {
                    echo '<h3>'.$value.'</h3>';
                }
              }
           }
           if ($traduct == 'ENG') {
            foreach ($lettreEng as $key => $value) {
              if ($key == $lettre) {
                echo '<h3>'.$value.'</h3>';
              }
            }
           }
            
        }
?>
    
</body>
</html>

