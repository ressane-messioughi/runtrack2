<?php

function Ressane_strlen($str) {
$i=0;
$compteur=0;


while(isset($str[$i])){
$i++;
$compteur++;
}
return $compteur;
}




$str = "Dans l'espace, personne ne vous entend crier.<br>";
$nombreDeCaractere = Ressane_strlen($str); 

echo $str ;
echo $nombreDeCaractere. " Nombre de caractère";

?>