<?php

namespace models;

class Product
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
     * @var float[]
     */
    public $prices;

    /**
     * @var string[]
     */
    public $pictures;

    /**
     * @var string
     */
    public $type;

    /**
     * @var integer | null
     */
    public $categoryId;

    /**
     * Product constructor.
     * @param string $name
     * @param string $article
     * @param float[] $arPrices
     * @param string[] $arPictures
     */
    public function __construct($name, $article, $arPrices, $arPictures)
    {
        $this->name = $name;
        $this->article = $article;
        $this->prices = $arPrices;
        $this->pictures = $arPictures;
    }

    public function send(){}
}