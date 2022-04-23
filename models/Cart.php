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
     * @var Customer
     */
    public $customer;

    /**
     * Cart constructor.
     * @param Product[] $products
     * @param Customer $customer
     */
    public function __construct($products, $customer)
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

    public function clear(){}
}