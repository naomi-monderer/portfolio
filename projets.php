<?php $title = "Les projets"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500&display=swap" rel="stylesheet">
    <title><?= $title ?></title>
</head>
<?php
require('include/header.php');
?>
<main class="main-projets">
<div class="heading flex-center">
  <div>
    <img  class="slide-up-titles title-projets" src="image/projets/lesProjets.png" alt="">
  </div>
</div>
    
    <section class="contener-projets">
    <article class="bloc-projets">

            <a  class="size-link" href="https://collectifalbeyt.hmsw.eu/al-beyt/views/front/index.php" target="blank">
                <img class="size animation-projet" src="image/projets/al-beyt.png" alt="">
            </a>
            <div class="sous-bloc-projets">
                <h2 class="molgak taille1 ">Al-Beyt Collectif</h2>
                <h3 class="basel-neue-italic taille4"> 30 Jui. 2022</h3>
                <p class="inter-light taille4">Ce site permet au Collectif Al-Beyt de communiquer sur leurs évènements
                     et donner un maximum de visibilité aux artistes partenaires. 
                     Les bénéfices des événements seront reversés à un grand projet d'aide humanitaire en Syrie. </br>
                    <span class="basel-neue-bold taille3"><b>HTML/CSS/PHP/MySQL/Javascript</b></span>
                </p>
            </div>
        </article>

        <article class="bloc-projets">
            <div class="sous-bloc-projets">
                <h2 class="molgak taille1 ">Gwokaang</h2>
                <h3 class="basel-neue-italic taille4"> 20 Mai 2022</h3>
                <p class="inter-light taille4">Utilisez ce moteur de recherche pour découvrir de fabuleux artistes</br>
                    <span class="basel-neue-bold taille3"><b>HTML/CSS/PHP/MySQL/Javascript/GIT/Materialize</b></span>

                </p>
            </div>
            <a  class="size-link" class="size-link" href="https://naomi-monderer.students-laplateforme.io/autocompletion/index.php" target="blank">
                <img class="size animation-projet" src="image/projets/autocompletion.png">
            </a>
        </article>
        <article class="bloc-projets">
            <a  class="size-link" href="https://naomi-monderer.students-laplateforme.io/views/index.php" target="blank">
                <img class="size animation-projet" src="image/projets/boutique.jpg" alt="">
            </a>
            <div class="sous-bloc-projets">
                <h2 class="molgak taille1 ">The BOOKS</h2>
                <h3 class="basel-neue-italic taille4"> 13 Avr. 2022</h3>
                <p class="inter-light taille4">Cette e-boutique a été conçu pour vendre des livres.
                    Profitez de l’espace administrateur et de toutes ses fonctionnalités. </br>
                    <span class="basel-neue-bold taille3"><b>HTML/CSS/PHP/MySQL/GIT</b></span>
                </p>
            </div>
        </article>
        <article class="bloc-projets">
            <div class="sous-bloc-projets">
                <h2 class="molgak taille1 ">Cinémax</h2>
                <h3 class="basel-neue-italic taille4">04 Fév. 2022</h3>
                <p class="inter-light taille4">Réservez une salle de cinéma avec votre créneau pour profiter de votre programmation.</br>
                    <span class="basel-neue-bold taille3"><b>HTML/CSS/PHP/MySQL/GIT/Bootstrap</b></span>
                </p>
            </div>
            <a  class="size-link" href="https://naomi-monderer.students-laplateforme.io/resa-salle/index.php" target="blank">
                <img class="size animation-projet" src="image/projets/reservation.jpg" >
            </a>
        </article>
        <article class="bloc-projets"> 
            <a  class="size-link" href="https://naomi-monderer.students-laplateforme.io/naomi-monderer-livre-or/index.php" target="blank">
                <img class="size animation-projet" src="image/projets/livreOr.jpg">
            </a>
            <div class="sous-bloc-projets">
                <h2 class="molgak taille1 ">Livre d’or</h2>
                <h3 class="basel-neue-italic taille4">01 Déc. 2021</h3>
                <p class="inter-light taille4">Postez un Message d’amour en hommage à Jimmy Cliff !</br>
                    <span class="basel-neue-bold taille3"><b>HTML/CSS/PHP/MySQL</b></span>
                </p>
            </div>
        </article>
        <article class="bloc-projets">
            <div class="sous-bloc-projets">
                <h2 class="molgak taille1">Voyages</h2>
                <h3 class="basel-neue-italic taille4">28 Octbre 2021</h3>
                <p class="inter-light taille4">Apprenez en plus sur le Brésil!. </br>
                    <span class="basel-neue-bold taille3"><b>HTML/CSS/PHP/MySQL</b></span>
                </p>
            </div>
            <a  class="size-link" href="https://naomi-monderer.students-laplateforme.io/voyages/voyages3.html" target="blank">
                <img class="size animation-projet" src="image/projets/bresil.jpg">
            </a>
        </article>
    </section>
</main>    

<?php
require('include/footer.php');
?>