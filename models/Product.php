<?php

namespace models;

class Product
{
    private $name;
    private $article;
    private $prices;
    private $pictures;
    private $type;

    /**
     * Product constructor.
     * @param string $name
     * @param string $article
     * @param string[] $arPrices
     * @param string[] $arPictures
     * @param string $type
     */
    public function __construct($name, $article, $arPrices, $arPictures, $type)
    {
        $this->name = $name;
        $this->article = $article;
        $this->prices = $arPrices;
        $this->pictures = $arPictures;
        $this->type = $type;
    }
}