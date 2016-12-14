<?php

include_once "Calculateur.php";
include_once  "Chargeur.php";
include_once "Produit.php";

session_start();


$loader = new Loader();
$produits = $loader->jsonLoader('produits.json');

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02/12/2016
 * Time: 14:26
 */
include_once "Calculateur.php";
include_once  "Chargeur.php";
class Basket extends CalculatorTva
{
    public $achats = [];
    public function calculator( $priceHc){
        parent::calculatedTva( $priceHc);
        $ttc = $priceHc + $this->tva;
        return $ttc;

    }
    static public function destroy(){
        return session_destroy();
    }

}
$basket = new Basket();
if(isset($_POST['select'])){

    //index cible
    $target = $_POST['select'];
    $selectedProduct = $produits[];
    //echo"le produit selectionner est";var_dump($selectedProduct);

    //print_r($_SESSION);

    $achat = new Achat($selectedProduct, 1);
    $achat->produit->priceHc = $basket->calculator($achat->produit->priceHc);
    //$achat->produit->amount = $achat->amount;
    //IN  PROGRESS
    array_push($basket->achats, $achat);
    var_dump($selectedProduct);
    if(isset($_SESSION['achats']) && $_SESSION['achats'] && count($_SESSION['achats'])>0 && $_SESSION['achats'][0]->produit->id == $selectedProduct->id){
        $_SESSION['achats'][$target]->amount = $_SESSION['achats'][$target]->amount + 1;
    }else {
        //var_dump($basket->achats);
        $_SESSION['achats'] = $basket->achats;
    }
    var_dump($_SESSION['acchats']);
    for($i = 0; $i < count($_SESSION['achats']);$i++){

        echo $_SESSION['achats'][$i]->produit->name." ".$_SESSION['achats'][$i]->amount. " ".$_SESSION['achats'][$i]->produit->priceHc." ";
    }
}elseif(isset($_POST['supr'])) {
    Basket::destroy();
}
else{
    echo 'rien ne passe !';
}