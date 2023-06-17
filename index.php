<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Laurence LICHTENBERGER</title>
        <link rel="stylesheet" href="style.css" />

    </head>

    <body>
    <?php include('header.php'); ?>
        <div class="block_page">
            <div class="banner">
                <img class="banner" src="images/banner4.jpg" alt="bannière" />
            </div>
            <!--<div class="selection">
                <p>selection</p>
            </div>-->
            <div class="div_article_background">
                    <img src="images/article_background1.jpg" id="article_background" alt="Image personne qui écris" />
                    <div class="superpose">
                        <h3>L’OPTION SUCCESSORALE : L’ACCEPTATION À CONCURRENCE DE L’ACTIF NET</h3>
                        <h5>Par Me Laurence LICHTENBERGER, le 26 Juillet 2021, Chambre des notaires de la Gironde</h5>
                        <a href="#arrow_ancrage"><div id="arrow_ancrage"><img src="images/arrow2.svg" class="arrow" alt="flèche" /></div></a>
                    </div>  
                </div>   
            <div class="notary_article">        
                <div id="article"><?php include('article.php'); ?></div>
            </div>
        </div>
        <footer> 
            <?php include('footer.php'); ?>
        </footer>
    </body>
</html>