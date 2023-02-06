<?php
include 'interface.php';
require_once 'Voiture.php';

class Conducteur extends Voiture
{
    public $nom;
    public $prenom;
    public $age;
    public $nombrePointPermis;

    public function __construct($prenom, $nom, $age, $nombrePointPermis, $marque, $modele, $type, $couleur)
    {
        parent::__construct($marque, $modele, $type, $couleur);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setNombrePointPermis($nombrePointPermis);
    }

    public function Conduire()
    {
        return "Je suis " . $this->getPrenom(). "  " . $this->getNom() . " et je conduis " . $this->Rouler();
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setNombrePointPermis($nombrePointPermis)
    {
        $this->nombrePointPermis = $nombrePointPermis;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getNombrePointPermis()
    {
        return $this->nombrePointPermis;
    }
}