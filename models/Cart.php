<?php


namespace models;


class Cart
{
    /**
     * @var CartProduct[]
     */
    private $products;

    /**
     * @var float
     */
    public $totalPrice;

    /**
     * @var string
     */
    public $status;

    /**
     * Cart constructor.
     * @param Product[] $products
     */
    public function __construct($products)
    {

    }

    public function purchase(){}

    /**
     * @param Product $product
     */
    public function addProduct($product){}

    /***
     * @param Product $product
     */
    public function removeProduct($product){}
}