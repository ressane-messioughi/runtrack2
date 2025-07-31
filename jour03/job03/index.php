<?php
// Liste de variable & tableau :
$str = "i'm sorry dave i'm afraid i can't do that";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

// Start la boucle 

for ($i = 0 ;$i < 41; $i++){ 

// On ouvre une autre boucle pour dire que que la variable "$voyelles" prend comme nom "$lavoyelles" 
// Pour une boucle forreach le "as" est obligatoire donc le rename également 

    foreach ($voyelles as $lavoyelles){
        if ($str[$i] == $lavoyelles){      /* If = Si "$str[$i]" parcourt ma chaine de caractère "$str", et calcul si "$i" est dans
                                            Dans le tableau des voyelles */ 

                echo $lavoyelles; /* Affiche chaque voyelles de "$str" en parcourant la chaine de caractère pour nous donner "$i"*/ 
        }


}
}

?>
