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
        $produits = array_map( function($p){
            $produit = new Product();

            $produit->id = $p->id;
            $produit->name = $p->nom;
            $produit->color = $p->couleur;
            $produit->size = $p->taille;
            $produit->priceHc = $p->prixHc;
            return $produit;
        }, $this->loadedFile->Produits);
        $this->loadedFile = $produits;
        return $produits;
    }
}
$a = new Loader();
$a->jsonLoader('produits.json');