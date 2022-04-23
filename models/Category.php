<?php


namespace models;


class Category
{
    /**
     * @var Product[]
     */
    public $products;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Category | null
     */
    public $parentCategory;

    /**
     * Category constructor.
     * @var Category|null $parent
     * @var string $name
     * @var Product[] $products
     */
    public  function __construct($parent, $name, $products)
    {
    }

    /**
     * @param Product $product
     */
    public function addProduct($product){}

    /**
     * @param Product $product
     */
    public function removeProduct($product){}
}