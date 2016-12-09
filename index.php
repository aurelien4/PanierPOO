<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/12/2016
 * Time: 10:53
 */
 include_once "Chargeur.php";
 include_once "Afficheur.php";
 include_once "Calculateur.php";

?>
<html>
<head>
    <title>Panier POO</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body >
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo right">Logo</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
    </div>
</nav>
<div class="row">
    <div class="col s5 m3 ">

    <?php
        $affiche = new Loader();
        $affiche->jsonLoader('tsconfig.json');
        for($i = 0 ; $i < count($affiche->loadedFile); $i++){
            // RETOUR MAX

    ?>
                    <div class="card blue-grey darken-1">
                            <div class="card-content white-text>

                                <p id="titre<?= $i; ?>"><?php echo $affiche->loadedFile[$i]->nom; ?></p>
                                <p id="couleur<?= $i; ?>"><?php echo "Couleur: ".$affiche->loadedFile[$i]->couleur." ";?></p>
                                <p id="taille<?= $i; ?>"><?php echo "Taille: ".$affiche->loadedFile[$i]->taille; ?></p>
                                <p id="euro<?= $i; ?>"><?php echo $affiche->loadedFile[$i]->prixHc . '€ ';?></p>

                            </div>
                        <div class="card-action">
                            <a href="#" id="add<?= $i ?>"><i class="material-icons">playlist_add</i></a>

                        </div>
                    </div>

        <?php     echo $i;} ?>

    </div>
    <div class="col s5 m6 center">
            <div class="card  blue-grey darken-1">
                <div class="car-content white-text">
                    <span class="card-title ">Pannier</span>
                    <p><div id="panier"></div></p>
                </div>
                <div class="card-action">

                    <a href="#"><i class="material-icons">delete </i>all Article</a>

                </div>
            </div>
    </div>
</div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript">
        var ecoute = new Ajax();
        var ecoute = ecoute.ecoute();
        $(".button-collapse").sideNav();
        $(".carousel.carousel-slider").carousel({full_width: true})</script>
</body>
</html>
