<?php

require 'Employe.php';


$employe = new RecuperationEmploye("Koffi","Roger",123);

echo $employe->obtenirSalaire();
echo"<br>";
echo $employe->prendreConge();

