<?php
$title = "Naomi Monderer 💚"; ?>
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
<main class="main-blocks ">
    <div class="inner-cursor"></div>
    <div class="outer-cursor"></div>

    <section class="bandeau">
        <img src="image/accueil/forme.png" alt="" >
        <!-- <article class="bienvenue">

                <span> 어서 와 </span> - <span>Bienvenue</span> - <span> բարի գալուստ </span> - <span>Hi </span> - <span> مرحبا </span> - <span> Halowa </span> - 
                <span> Velkominn </span> - <span> ยินดีต้อนรับ </span> -<span> dalal-jàmm </span> - <span> Hoşgeldiniz</span> - 
                <span> 欢迎 </span> -  <span>Bemvenida</span> -  <span>ようこそ</span> - <span> მოგესალმებით</span> -
          
        </article> -->
   </section>

    <section class="contener">
        <img class="kagome" src="image/accueil/kagome.png">
        <div class="heading">
            <div>
                <img class=" slide-up-titles title-index" src="image/accueil/developpeuse.png" alt="">
            </div>
            <div>
                <img class=" slide-up-titles title-index" src="image/accueil/web_&_mobile_Jr.png" alt="">
            </div>   
        </div>   
        <h2 class="box-alternance slide-in-right"><span class="inter-light subtitle-index ">Alternance <span class="inter-medium taille4">Novembre 2022</span></span></h2>
        <article>
            <p class="inter-light taille4 contenu slide-up-p">
                    En formation à <a class="LaPlateforme_" href="https://laplateforme.io/">la Plateforme_</a> 
                    afin de m’ouvrir aux domaines du web, je cherche une alternance pour Novembre 2022. 
                    Les projets réalisés au cours de cette année m’ont permis de découvrir comment communiquer avec une base de donnée grâce à Mysql,
                    autant qu’utiliser des outils de maquettage comme Figma. J'ai aussi appris à penser la conception d'un projet, 
                    à organiser les différentes étapes, à aborder certaines logiques d’algorithmie et à travailler en équipe...
                    J'ai travaillé avec des langages tels que <b>PHP</b>,<b>SQL</b>,<b>Javascript</b>, et j'ai découvert l'outil de versionning <b> Github</b> ainsi que le fonctionnement de <b> Bootstrap</b>. </br></br>
                    J'aspire à me former sur des frameworks front-end comme <b>React Native</b> et <b>Angular</b> mais aussi à apprendre <b>Node.js</b> ou <b>symfony</b>. </br>
                    Je suis determinée et j’ai soif d'en savoir toujours plus! 
                </p>
                <p class="signature-index">(*˘︶˘*).｡.:*♡</p>
        </article>
    </section>
</main>
<?php
require('include/footer.php');
?>