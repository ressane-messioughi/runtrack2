<?php
$hauteur = 5;

for ($i = 0; $i <= $hauteur; $i++) {
    for ($espace =  1; $espace <= $hauteur - $i; $espace++) {
        echo " ";
    }
    echo "/";

    for ($etoile = 0 ; $etoile <= 2 * $i - 1; $etoile++) {
        if ($i == $hauteur){
            echo "_";
        }
        else{
        echo " ";
    }
    }

    echo "\\";

    echo "<br />";
}

?>