<!-- Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
“Consonnes”.. -->

<?php
$str = "on n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];


$voyelles = "aeiouy";


for ($i=0;$i < 66 ; $i++) { 
   $char = $str[$i];
        if (!( ($char >= 'a') && ($char <= 'z') )) {
        continue;
}

        $isVowel = false;

        for ($j = 0; $j < 6; $j++) {
        if ($char == $voyelles[$j]) {
        $isVowel = true;
        break;  
}
}
        if ($isVowel) {
        $dic["voyelles"]++;
        } else {
        $dic["consonnes"]++;
        }       
}
?>

<html>
<table border='1'>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dic as $key => $value) { ?>
        
        <tr>
            <td> <?php echo ($key) ?> </td>
            <td> <?php echo ($value) ?> </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php echo 'Phrase : '. $str; ?>
</html>
