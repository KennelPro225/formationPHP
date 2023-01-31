<?php
require 'Utilisateurs.php';

$utilisateurs = new Utilisateurs();

echo $utilisateurs->recupererAge();
// $utilisateurs->prenom = 'Georges Kennel Emmanuel ';
// echo "le nom de l'utilisateur est : ". $utilisateurs->nom;
echo "<br>";
echo $utilisateurs->seConnecter();
?>