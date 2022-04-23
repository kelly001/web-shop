<?php


namespace models;


use \Exception;

class DigitalProduct extends Product
{
    /**
     * @var string|null
     */
    private $link;

    /**
     * @var string|null
     */
    private $email;

    /**
     * DigitalProduct constructor.
     * @param $name
     * @param $article
     * @param $arPrices
     * @param $arPictures
     * @param null|string $link
     * @param null|string $email
     * @throws Exception
     */
    public function __construct($name, $article, $arPrices, $arPictures, $link = null, $email = null)
    {
        parent::__construct($name, $article, $arPrices, $arPictures);

        $this->type = 'digital';

        if ($link === null && $email === null) {
            throw new Exception('Should generate at least one of the link or email');
        } else {
            if ($link !== null && $email !== null) {
                throw new Exception('Should generate only one of the link or email');
            } else {
                $this->link = $link;
                $this->email = $email;
            }
        }
    }
}