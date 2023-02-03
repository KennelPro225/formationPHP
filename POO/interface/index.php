
<?php
require 'Personnel.php';
require 'Professeur.php';

$perso = new Professeur("Koffi",2,"100");

echo $perso->calculerSalaire();
