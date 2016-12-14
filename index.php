<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/12/2016
 * Time: 10:53
 */

session_start();
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

<div class="row">
    <div class="col s5 m3 ">

    <?php
//    if(isset($_SESSION['basket'])){echo '<h1>bitchplz!</h1>'; var_dump($_SESSION['basket']);}
        $affiche = new Loader();
        $affiche->jsonLoader('produits.json');
        for($i = 0 ; $i < count($affiche->loadedFile); $i++){
            // RETOUR MAX

    ?>
                    <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p id="id<?= $i; ?>"><?= $affiche->loadedFile[$i]->id; ?></p>
                                <p id="titre<?= $i; ?>"><?php echo $affiche->loadedFile[$i]->name; ?></p>
                                <p id="couleur<?= $i; ?>"><?php echo "Couleur: ".$affiche->loadedFile[$i]->color." ";?></p>
                                <p id="taille<?= $i; ?>"><?php echo "Taille: ".$affiche->loadedFile[$i]->size; ?></p>
                                <p id="euro<?= $i; ?>"><?php echo $affiche->loadedFile[$i]->priceHc . '€ ';?></p>

                            </div>
                        <div class="card-action">
                            <a href="#" id="add<?= $i ?>"><i class="material-icons">playlist_add</i></a>

                        </div>
                    </div>

        <?php     echo $i;} ?>

    </div>
</div>

</body>
</html>
