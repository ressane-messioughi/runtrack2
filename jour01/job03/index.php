<?php

$actif = true;
$nom = "Ressane";
$age = 28;
$taille = 1.75;

$variables = get_defined_vars();


echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";

foreach ($variables as $nom_var => $valeur)



    if (in_array($nom_var, ['_GET', '_POST', '_COOKIE', '_FILES', '_SERVER', '_ENV', '_REQUEST', 'GLOBALS', 'variables'])) {
        continue;
    }
echo "<tr>";
    echo "<td>" . gettype($valeur) . "</td>";
    echo "<td>" . htmlspecialchars($nom_var) . "</td>";
    
    // Formatage de la valeur selon son type
    if (is_array($valeur)) {
        echo "<td>" . htmlspecialchars(print_r($valeur, true)) . "</td>";
    } elseif (is_bool($valeur)) {
        echo "<td>" . ($valeur ? 'true' : 'false') . "</td>";
    } else {
        echo "<td>" . htmlspecialchars((string)$valeur) . "</td>";
    }

    echo "</tr>";


echo "</tbody></table>";

?>