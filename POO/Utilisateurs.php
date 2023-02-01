<?php

class Utilisateurs
{
    private $nom;
    private $prenom;
    private $age = 23;
    private $email;

    public function __construct(string $nom, string $prenom, int $age, string $email)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setEmail($email);
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new Exception("Attention, l'adresse email n'est pas valide");
        }
    }

    public function setAge($age)
    {
        if ($age > 120 || $age < 1) {
            throw new Exception("L'âge doit être entre 1 et 120");
        } else {
            $this->age = $age;
        }
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAge()
    {
        return $this->age;
    }
}
?>