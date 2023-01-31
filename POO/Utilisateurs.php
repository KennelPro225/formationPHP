<?php

class Utilisateurs
{
    private $nom;
    private $prenom;
    private $age = 23;
    private $email;

    function seConnecter()
    {
        echo 'Je suis un utlisateur de votre application, je peux donc me connecter';
    }

    function seDeconnecter()
    {
        echo 'Je suis un utlisateur de votre application, je peux donc me déconnecter';
    }

    public function recupererAge()
    {
        return $this->age;
    }
}
?>