<?php
class Produit
{
    private $reference;
    private $name;
    private $price;
    private static $remise = 20;
    const LOWEST_PRICE = 0;

    public function __construct($reference, $name, $price)
    {
        $this->setReference($reference);
        $this->setName($name);
        $this->setPrice($price);
    }

    public function setRemise($remise)
    {
        self::$remise = $remise;
    }

    public static function getRemise()
    {
        return self::$remise;
    }

    public function getNewPrice()
    {
        $this->price = $this->price * (1 - self::$remise / 100);
        if ($this->price < self::LOWEST_PRICE) {
            throw new Exception("La remise ne peut pas exceder les 100%");
        } else {
            return $this->price;
        }
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        if ($price < 0) {
            throw new Exception("Le prix ne peut pas être nul");
        } else {
            $this->price = $price;
        }
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
