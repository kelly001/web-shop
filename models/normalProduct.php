<?php


namespace models;

use Exception;
use models\Product;

class normalProduct extends Product
{
    /**
     * @var int
     */
    public $stock;

    /**
     * normalProduct constructor.
     * @param $name
     * @param $article
     * @param $arPrices
     * @param $arPictures
     * @param int $stock
     */
    public function __construct($name, $article, $arPrices, $arPictures, $stock = 0)
    {
        parent::__construct($name, $article, $arPrices, $arPictures);

        $this->type = 'normal';
        $this->stock = $stock;
    }

}