<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/12/2016
 * Time: 12:17
 */

class Product
{
    public $id,
            $name,
            $color,
            $size,
            $priceHc;
    public function __construct($nom=null, $color=null, $size=null, $price=null)
    {
        $this->id = $this->id;
        $this->name = $nom;
        $this->color = $color;
        $this->size = $size;
        $this->priceHc = $price;
    }
}

class Achat{
    public $produit;
    public $amount;

    public function __construct($products, $amount)
    {
        $this->produit = $products;
        $this->amount = $amount;

    }


}