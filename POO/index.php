<?php
require 'Utilisateurs.php';

$utilisateurs = new Utilisateurs("KASSI", "Ke", 20, "kennel.kassi@imako.digital");
// echo $utilisateurs->recupererAge();
// $utilisateurs->prenom = 'Georges Kennel Emmanuel ';
// echo "le nom de l'utilisateur est : ". $utilisateurs->nom;
echo "<br>";
// echo $utilisateurs->seConecter();

echo "Vous êtes " . $utilisateurs->getNom() . " ";
echo $utilisateurs->getPrenom();
echo " Vous avez " . $utilisateurs->getAge() . " ans ";
echo "et votre adresse mail est " . $utilisateurs->getEmail();
// echo "<br>";
// echo $utilisateurs->getAge();
