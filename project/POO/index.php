<?php
// require 'interface.php';
// require 'Voiture.php';
require "Conducteur.php";

$conducteur = new Conducteur("Kennel", "KASSI", 20, 12, "Toyota", "Corella", "Berline", "rouge");

echo $conducteur->Conduire();
