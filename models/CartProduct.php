<?php


namespace models;


class CartProduct
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $article;

    /**
     * @var integer
     */
    public $quantity;

    /**
     * @var float
     */
    public $priceForQauntity;

    /**
     * CartProduct constructor.
     * @param Product $product
     * @param int $quantity
     * @param boolean $price
     */
    public function __construct($product, $price, $quantity){}

}