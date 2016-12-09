<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/12/2016
 * Time: 10:37
 */
include "Produit.php";
class Loader
{
    public $loadedFile;
    public function jsonLoader($file){
        $json = file_get_contents($file);
        $parse_json = json_decode($json);
           $this->loadedFile = $parse_json;
        // creation d'un tableau pour ranger les produits;
        $table = array_map( function($p){
            $produit = new Product();
            $produit->nom = $p->nom;
            $produit->couleur = $p->couleur;
            $produit->taille = $p->taille;
            $produit->prixHc = $p->prixHc;
            return $produit;
        }, $this->loadedFile->Produits);
        $this->loadedFile = $table;
    }
}
$a = new Loader();
$a->jsonLoader('tsconfig.json');