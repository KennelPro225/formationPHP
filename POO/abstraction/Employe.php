<?php

abstract class Employe
{
    protected $nom;
    protected $prenom;
    protected $salaire;

    abstract function obtenirSalaire();

    abstract function prendreConge();

    public function __construct(string $nom,string $prenom,int $salaire){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setSalaire($salaire);
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }
}

class RecuperationEmploye extends Employe{

    public function obtenirSalaire()
    {
        echo "Vous vous appellez ".$this->nom." et votre salaire est: ". $this->salaire;
    }

    public function prendreConge()
    {
        echo "Votre congé est de 38 jours";
    }

    public function __construct(string $nom,string $prenom,int $salaire)
    {
        parent::__construct($nom,$prenom,$salaire);
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }
}
