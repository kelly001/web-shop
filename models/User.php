<?php


namespace models;


class User
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $address;

    public function __construct($name, $address){}

}