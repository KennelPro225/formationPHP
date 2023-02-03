
<?php
require 'Personnel.php';
require 'Professeur.php';

$perso = new Professeur("Koffi",20,200);

echo $perso->calculerSalaire();
