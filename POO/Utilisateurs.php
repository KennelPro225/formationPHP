<?php

class Utilisateurs
{
    private $nom;
    private $prenom;
    private $age = 23;
    private $email;

    public function __construct(string $nom,string $prenom,int $age,string $email)
    {
       echo "Vous êtes ". $this->nom = $nom. " ";
       echo $this->prenom = $prenom;
       echo "<br>Vous avez ".$this->age = $age ." ans ";
       echo " Et voici votre email pour que nous puissions vous contacter " . $this->email = $email;
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
        
        if(filter_var($email,FILTER_SANITIZE_EMAIL)){
            $this->email = $email;
        }
        else{
            throw new Exception("L'information insérée n'est pas un mail, merci!");
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
