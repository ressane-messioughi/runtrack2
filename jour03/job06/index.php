<?php
// Création de mes variables 
$str = "Les choses que l'on possède finissent par nous posséder.";
$chars = [];
// Calcul avec strlen le nombre de caractère dans la chaine str avec strlen, on utilise "mb" pour safe l'encodage en UTF-8
$mbvar = mb_strlen($str);

// Création de ma boucle qui parcourt chaque caractère de 0 à la longueur -1 (sens inverse)
for ($i=0; $i < $mbvar ; $i++) { 
$chars[] = mb_substr($str,$i,1);
}

// Inverse la chaine de caractère.
$inverse = ' ';
// Inverse les caractère de 56 à 0 (inverse) sort de la boucle à "-1"
for ($i= count($chars) - 1; $i >= 0 ;/*Apres chaque boule on enlève -1 à $i => */$i--) { 
    $inverse .= $chars[$i];
    // ".="  est un opérateur de concaténation avec affectation on demande de prendre / On ajoute "$chars[$i]" à la fin de "$inverse"
}

echo $inverse ;

?>