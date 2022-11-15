
<?php
$title = "Contact"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/contact.css">
    <script src="js/index.js"></script>
    <script src="js/style.js"></script>
    <title><?= $title ?></title>
</head>
<body>
<header>
    <div class="container">
        <nav class="nav-parent">
            <article class="naomi"><a class="links-header cursor" href="index.php">Naomi Monderer 🖤</a></article>
            <article class="item-nav" id="projets"><a class="links-header cursor" href="projets.php"><span class="nav-anim">Les projets</span></a></article>
            <article class="item-nav" id="a_propos"><a class="links-header cursor" href="a_propos.php"><span class="nav-anim">À propos</span></a></article>
            <article class="item-nav" id="contact"><a class="links-header cursor" href="contact.php"><span class="nav-anim">Contact</span></a></article>
        </nav> 
    </div>
</header>
<main>
<div class="inner-cursor"></div>
<div class="outer-cursor"></div>
<div class="contener">
    <section class="contener1">
        <h1 class="basel-neue-thin taille1 title">Contact</h1></br>
        <span class="inter-light     date"></br>
        <?php 
            $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
            $tempsPresent = new DateTime();
            echo $formatter->format($tempsPresent)." ".date_format($tempsPresent,'H:i')
        ?>
        </span>
        <article class="elements">
            <p class="inter-light marseille ">Marseille</p></br>
            <p class="inter-light france">France</p></br>
        </article>
    </section>
    <section class="contener2">
        <p class="inter-medium taille1 phrase-accroche">｡･*:ﾟ’★ AU PLAISIR D’ECHANGER AVEC VOUS 。
            CONTACTEZ MOI VIA L’ADRESSE MAIL CI-DESSOUS ↴ ☆｡･:*･ﾟ’</p>
    </section>
    <section class="contener3 mail">
        <a class="link" href="mailto:naomi.monderer@laplateforme.io">
            <span class="inter-light-italic taille2 ">naomi.monderer@laplateforme.io</span> <span> 💌 </span>
        </a>
    </section>
    <hr>
    <section class="contener4">
        <article >
            <table class="contact-links">
                <tr>
                    <td rowspan="2" class="td-vide"></td>
                    <td><a class="inter-medium taille3 link" href="https://www.linkedin.com/in/naomi-monderer-%F0%9F%90%9D-274230214/" target="_blank">LINKEDIN</a></td>
                    <td><a class="inter-medium taille3 link" href="https://www.instagram.com/gwokaang/" target="_blank">INSTAGRAM</a></td>
                </tr>
                <tr>
                    <td><a class="inter-medium taille3 link" href="https://twitter.com/NaomiMonderer" target="_blank">TWITTER</a></td>
                    <td><a class="inter-medium taille3 link" href="https://github.com/naomi-monderer" target="_blank">GITHUB</a></td>
                </tr>
            </table>
        </article>
    </section>
</div>
</main>
<?php
require('include/footer.php');
?>