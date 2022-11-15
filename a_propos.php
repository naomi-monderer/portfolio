
<?php
$title = "À propos"; ?>
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
    <script src="js/index.js"></script>
    <script src="js/style.js"></script>
    <title><?= $title ?></title>
</head>
<?php
require('include/header.php');
?>
<main class="main-a-propos">
    
<div class="inner-cursor"></div>
<div class="outer-cursor"></div>

    <section class="contener-a-propos">
        <div class="heading flex-center">
            <div class="center-title-a-propos">
                <img class=" slide-up-titles title-a-propos" src="image/a_propos/a_propos.png" alt="">
                <!-- <img  class="slide-up-titles title-projets" src="image/projets/lesProjets.png" alt=""> -->
            </div>
        </div>
       
        <p class="inter-light taille4 contenu-a-propos">Grâce à un cursus étudiant dans le domaine de l'art
                (Bac arts Appliqués et Diplôme National des beaux-arts de Marseille),
                j’ai aiguisé un goût prononcé pour la culture de l'image et le graphisme. Les pratiques artistiques et ce site web
                retracent mon parcours.
        </p>
        <article class="box-cv">
            <a class="size-link-a-propos" href="Recherche_Alternance.pdf" target="_blank">
                <img class="cv" src="image/a_propos/Recherche_Alternance.png">
            </a>
            <img class="size-draw" src="image/a_propos/dessinNew.png" alt="">
        </article>

        <hr class="hr-a-propos"></hr>
    </section>
    <section class='bloc-image'>
        <article class="sous-bloc-image">
            <h2 class="title-ceramique taille"><span class="taille5">.:☆</span> Céramique <span class="taille5">。*:･'(*⌒―⌒*))</span></h2>
            <div class="sous-bloc-1">
                <img class="gargouille1" src="image/a_propos/ceramique/gargouille.png" alt="">
                <img class="animation monstre2" src="image/a_propos/ceramique/monstre.png" alt="">
            </div>
            <div class="sous-bloc-2">
                <!-- <div></div> -->
                <img  class="lui3 animation2" src="image/a_propos/ceramique/lui.png" alt="">
                <img class="arbre4" src="image/a_propos/ceramique/arbre.png" alt="">
            </div>
            <div class="sous-bloc-3">
                <img class="fleurs2" src="image/a_propos/ceramique/fleurs2.png" alt="">
            </div>
            <div class="sous-bloc-4">
                <img class="animation gargouille2" src="image/a_propos/ceramique/gargouille2.png" alt="">
                <img class="vase" src="image/a_propos/ceramique/vase.png" alt="">
                <!-- <p>Les gargouilles-pierres sont les vestiges de ruines retrouvées dans les calanques des côtes méditérannéennes</p> -->
            </div>
            
        </article>

        <p style="text-align: center"><❤>EN COURS DE CONSTRUCTION<❤></p>
        <!-- <h2 class="title-ceramique taille"><span class="taille5">(♡μ_μ)	 。</span>  Photographie <span class="taille5">☆:.</span></h2>
        <h2 class="title-ceramique taille"><span class="taille5">.:☆ </span> Gravure <span class="taille5"> (×﹏×) </span></h2> -->
    </section>
</main>

<?php
require('include/footer.php');
?>