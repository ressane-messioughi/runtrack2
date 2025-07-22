<?php


for($i = 1 ; $i <= 1000 ; $i++) {
    $nombrediviseur = 0;
    
    for ($n = 1 ; $n <= $i ; $n++){
        if ($i % $n == 0) {
         $nombrediviseur ++;

        }
      
    }
    if($nombrediviseur == 1){
        echo $i . " un seul diviseur <br/>"; 
        
        
        } 
    elseif ($nombrediviseur == 2){
      echo  $i. " nombre premier<br>";

    }
    else {
        echo $i. "est un nombre ordinaire<br>";
    }


}
?>