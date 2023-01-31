<?php
require 'Utilisateurs.php';

$utilisateurs = new Utilisateurs("KASSI","Kennel",20,"kennel.kassi@imako.digital");

// echo $utilisateurs->recupererAge();
// $utilisateurs->prenom = 'Georges Kennel Emmanuel ';
// echo "le nom de l'utilisateur est : ". $utilisateurs->nom;
echo "<br>";
// echo $utilisateurs->seConnecter();

// $utilisateurs->setNom("KASSI");
// $utilisateurs->setAge("22");
// $utilisateurs->setPrenom("Kennel");
// $utilisateurs->setEmail("kennel.kassi@imako.digital");
// echo "<br>";
// echo $utilisateurs->getAge();
?>