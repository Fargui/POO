<?php

include 'Voiture.php';

$voiture_1 = new Voiture("Ford", "Ranger", "Noire", "Michel", 0);
$voiture_2 = new Voiture("Toyota", "Hilliux", "Blanc", "Jean", 0);
$voiture_3 = new Voiture("Dodge", "RAM 1500", "Rouge", "Janine", 0);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Les voitures</title>
</head>

<body>

    <div class="container">


        <h3 class="mt-4 text-center">Démarrer les véhicules 1 et 3 !</h3>
        <div class="d-flex justify-content-around mt-5">
            <p><?=$voiture_1->setReady(2)->start();?></p>
            <p><?=$voiture_3->setReady(2)->start();?></p>
        </div>


        <hr>
        <h3 class="text-center">Le véhicule 1 accélère jusqu'à 50km/h</h3>
        <div>
            <?= "<strong>Marque :</strong> ".$voiture_1->getBrand()."<br>
                <strong>Vitesse :</strong> ".$voiture_1->setSpeed(50)->getSpeed()." Km/h <br>"; ?>
        </div>

        <hr>
        <h3 class="text-center">Le véhicule 3 accélère jusqu'à 30km/h</h3>
        <div>
            <?= "<strong>Marque :</strong> ".$voiture_3->getBrand()."<br>
                <strong>Vitesse :</strong> ".$voiture_3->setSpeed(30)->getSpeed()." Km/h <br>"; ?>
        </div>

        <hr>
        <h3 class="text-center">
            <?= "La ".$voiture_1->getBrand()." et la ".$voiture_3->getBrand(). " tournent à droite";?></h3>
        <div>
            <?= "<strong>Marque :</strong> ".$voiture_1->getBrand()."<br>
                <strong>Direction :</strong> ".$voiture_1->turn('droite')."<br>"; ?>
        </div>
        <div>
            <?= "<strong>Marque :</strong> ".$voiture_3->getBrand()."<br>
                <strong>Direction :</strong> ".$voiture_3->turn('droite')."<br>"; ?>
        </div>

        <hr>
        <h3 class="text-center">La Ford ralenti de 30km/h</h3>
        <div>
            <?= "<strong>Marque :</strong> ".$voiture_1->getBrand()."<br>
                <strong>Vitesse :</strong> ".$voiture_1->slowDown(30)->getSpeed()." Km/h <br>"; ?>
           
        </div>

        <hr>
        <h3 class="text-center">La Dodge accélère de 40km/h</h3>
        <div>
            <?= "<strong>Marque :</strong> ".$voiture_3->getBrand()."<br>
                <strong>Vitesse :</strong> ".$voiture_3->speed(40)->getSpeed()." Km/h <br>"; ?>
        </div>

        <hr>
        <h3 class="text-center">La Ford tourne à gauche</h3>
        <div>
            <?= "<strong>Marque :</strong> ".$voiture_1->getBrand()."<br>
                <strong>Direction :</strong> ".$voiture_1->turn("gauche")." <br>"; ?>
        </div>

        <hr>
        <h3 class="text-center">On stop tous les véhicules</h3>
        <div class="d-flex justify-content-around mt-4">
            <div>
                <?= "<strong>Marque :</strong> ".$voiture_1->getBrand()."<br>
                <strong>Etat :</strong> ".$voiture_1->setReady(1)->start()." <br>"; ?>
            </div>
            <div>
                <?= "<strong>Marque :</strong> ".$voiture_2->getBrand()."<br>
                <strong>Etat :</strong> ".$voiture_2->setReady(1)->start()." <br>"; ?>
            </div>
            <div>
                <?= "<strong>Marque :</strong> ".$voiture_3->getBrand()."<br>
                <strong>Etat :</strong> ".$voiture_3->setReady(1)->start()." <br>."; ?>
            </div>
        </div>

        <hr>
        <h3 class="text-center">Conducteurs et vitesse max</h3>
        <div class="d-flex justify-content-around mt-4">
        <div>
            <?= "<strong>Marque :</strong> ".$voiture_1->getBrand()."<br>
                <strong>Conducteur :</strong> ".$voiture_1->getConductor()." <br>"; ?>
        </div>
        <div>
            <?= "<strong>Marque :</strong> ".$voiture_2->getBrand()."<br>
                <strong>Conducteur :</strong> ".$voiture_2->getConductor()." <br>"; ?>
        </div>
        <div>
            <?= "<strong>Marque :</strong> ".$voiture_3->getBrand()."<br>
                <strong>Conducteur :</strong> ".$voiture_3->getConductor()." <br>
                <strong>Vitesse max :</strong> ".$voiture_3->getSpeed();?>
        </div>
        </div>








    </div><!-- End Container -->


</body>

</html>