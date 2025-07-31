<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c -->


<?php
// Variable contenant la phrase $string 
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
// Variable receptionniste de la nouvelle phrase.
$newStr = ' ';
// Variable pour le calcul de la chaine de caractère en précisant l'encodage UTF-8 grace à la function "mb"
$longueur = strlen($str);


// Parcours la chaine $str en partant de l'index 1 // Inférieur à la longueur de la chaine // Incrémentation 
for ($i=1; $i < $longueur; $i++) { 
    $newStr = substr($str,1, $longueur - 1);
}

$newStr .= substr($str,0,1);

// echo de ma boucle 
echo $newStr;

?>