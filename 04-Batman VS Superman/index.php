<?php 

include 'Personnage.php';

$batman = new Personnage("Batman", Personnage::MEDIUM);
$superman = new Personnage("Superman", Personnage::NOVICE );

function score ($opponent_1, $opponent_2){

    return '<br>'.'<small>('.$opponent_1->getName().':'.$opponent_1->getPv().' pv)</small><br>'.'<small>('.$opponent_2->getName().':'.$opponent_2->getPv().' pv)</small>';
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?=$batman->getName();?> VS <?=$superman->getName();?></title>
</head>
<body>

<h2>Salutation</h2>

<div>
    <?= $batman->salue($superman);?>
    <?= score($batman, $superman);?>
</div>
<div class="mt-2">
    <?= $superman->salue($batman) ;?>
    <?= score($batman, $superman);?>
</div>


<h2 class="mt-2">Début du combat</h2>

<hr>

<div>
    <h4>Batman attaque Superman</h4>
    <?php $batman->attaque($superman);?>
    <?= score($batman, $superman);?>
</div>

<hr>

<div>
    
</div>





    
</body>
</html>


