<?php

require 'Utilisateur.php';
require 'Auteur.php';

$auteur = new Auteur("KASSI", "Kennel", "kennelkassi@gmail.com", 12, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolor eaque ut quibusdam rem quidem architecto in sequi iure, consequatur, impedit obcaecati. Voluptatum eveniet rem quasi nostrum illum quos tempora ullam culpa, totam itaque.");

var_dump ($auteur->seConnecter());

?>

