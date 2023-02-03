<?php

class Professeur implements Personnel
{
    private $nom;
    private $anciennete;
    private $indice;

    public function __construct($nom,$anciennete,$indice){
        $this->setNom($nom);
        $this->setAnciennete($anciennete);
        $this->setIndice($indice);
    }

    public function calculerSalaire()
    {
        return 100000*(1+$this->getIndice()*$this->getAnciennete()/100);
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setAnciennete($anciennete)
    {
        $this->anciennete = $anciennete;
    }
    public function setIndice($indice)
    {
        $this->indice = $indice;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getAnciennete()
    {
        return $this->anciennete;
    }
    public function getIndice()
    {
        return $this->indice;
    }
}
