<?php
require_once 'interface.php';
class Voiture
{
    public $marque;
    public $modele;
    public $type;
    public $couleur;

    public function __construct($marque, $modele, $type, $couleur)
    {
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setType($type);
        $this->setCouleur($couleur);
    }

    public function Rouler()
    {
        return "La voiture de marque " . $this->getMarque() . " modèle " . $this->getModele();
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }
}
