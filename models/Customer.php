<?php


namespace models;


class Customer extends User
{
    /**
     * @var Product
     */
    public $subscribedProducts;

    public function __construct($name, $address)
    {
        parent::__construct($name, $address);
    }

    /**
     * @param Product $product
     */
    public function notify($product) {}
}