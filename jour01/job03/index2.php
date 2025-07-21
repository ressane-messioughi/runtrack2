<?php
// Définition de quelques variables
$nom = "Alice";
$age = 30;
$est_actif = true;
$taille = 1.75;

$tableauvariable = 
[
[1, 2],
[3, 4],
];


$variables = 
[
    'Nom' => $nom,
    'Age' => $age,
    'Actif' => $est_actif,
    'Taille' => $taille
];


?>

<table>
    <thead>
        <tr>
            <th>Type de variables</th>
            <th>Nom de variables</th>
            <th>Valeur</th>
        </tr>

    </thead>
    <tbody>
        <?php foreach ($variables as $name => $value): ?>
            
            <tr>
                <td>
                    <?php echo gettype($value); ?>
                </td>
                <td>
                    <?php echo $name; ?>
            </td>


                <td>
                    <?php
                    if (is_bool($value)) {

                        echo $value ? 'true' : 'false';   
                    }

                    else { 
                        echo htmlspecialchars((string) $value);

                    }

                    ?>
        </tr>
            

        <?php endforeach; ?>

        
    </tbody>
</table>
