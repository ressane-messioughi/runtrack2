<?php

$actif = false;
$nom = "Ressane";
$age = 28;
$taille = 1.75;
?>

<table>

  <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
  </tr>
    
  <tr>
    <td><?php echo gettype($actif)?></td>
    <td>Actif</td>
    <td><?php echo $actif ?></td>
  </tr>
  <tr>
    <td><?php echo gettype($age)?></td>
    <td>Age</td>
    <td><?php echo $age ?></td>
  </tr>
  <tr>
    <td><?php echo gettype($nom)?></td>
    <td>Nom</td>
    <td><?php echo $nom ?></td>
  </tr>
  <tr>
    <td><?php echo gettype($taille)?></td>
    <td>Taille</td>
    <td><?php echo $taille ?></td>
  </tr>
</table>
