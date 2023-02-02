<?php
require 'Produit.php';

$article = new Produit('P21', 'Banane', 3000);
// var_dump($article);
echo $article->getRemise();
echo "</br>";
echo $article->setRemise(10);
echo "</br>";
echo $article->getPrice();
echo "</br>";
echo $article->getNewPrice();
echo "</br>";
echo $article->getPrice();
// echo "</br>";
// echo $article->getReference();
// echo "</br>";
// echo $article->getName();
// echo "</br>";
// echo $article->getPrice(); 