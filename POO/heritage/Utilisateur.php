<?php

class Utilisateur
{
    protected $nom;
    protected $prenom;
    protected $age = 23;
    protected $email;

    public function __construct(string $nom, string $prenom, string $email)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
    }

    public function seConnecter()
    {
        echo "Je suis un utilisateur de votre application, je peux donc me connecter";
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

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
