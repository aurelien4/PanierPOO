<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02/12/2016
 * Time: 14:26
 */
include_once "Calculateur.php";
class Basket extends CalculatorTva
{
    public $name , $priceTtc, $amount;
    public function calculator($priceHc){
        parent::calculatedTva($priceHc);
        $ttc = $priceHc + $this->TVA;
        $this->priceHc = $ttc;

    }

}
if(isset($_POST['titre']) AND isset($_POST['euro'])){
    $q = new Basket();
    $q->calculator($_POST['euro']);
    $q->amount = $q->amount +1;
    $q->name = $_POST['titre'];
    echo " Nom: ".$q->name." Prix ".$q->priceTtc."€  Quantité: ".$q->amount;
}else{
    echo 'rien ne passe !';
}