
<?php
$tableau = array(
    'Prenom' => 'Ressane',
    'Nom' => 'Messioughi'
);

foreach ($tableau as $key => $value) {
    if (isset($_GET[$key])) {
        echo $_GET[$key];
    }
}

if (isset($tableau["Prenom"])) {
    echo $tableau["Prenom"];
} else {
    echo "La clé 'Prenom' n’existe pas.";
}
?>
    <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link href="style.css" rel="stylesheet" />
  <title>Formulaire</title>
</head>

<body>

<form>
  <div class="tableauAssoc">
<label for="Nom"><b>Nom :</b></label>
<input type="text" id="Nom" name="Nom" placeholder="Nom*"/> 

<label for="Prenom"><b>Prénom :</b></label>
<input type="text" id="Prenom" name="Prenom" placeholder="Prénom*"/> 

<label for="AdresseMail"><b>Adresse mail :</b></label>
<input type="email" id="AdresseMail" name="AdresseMail" placeholder="Mail*"/> 

<label for="NumTel"><b>Numéro de téléphone :</b></label>
<input type="tel" id="NumTel" name="NumTel" placeholder="Tel*" onclick="javascript:this.value=''" onblur="if(this.value=='')this.value='Tel*'"/> 

<label for="MDP"><b>Mot de passe :</b></label>
<input type="password" id="MDP" name="MDP" placeholder="Mot de passe*" onclick="javascript:this.value=''" onblur="if(this.value=='')this.value='Mot de passe*'"/>

<input type="submit" id="Send" name="Send" value="Envoyer"> 

</div>

</form>
<table border="1">
    <thead>
        <tr>
            <th>Arguments</th>
            <th>Valeurs</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tableau as $key => $value) { ?>
        <tr>
            <td><?php echo htmlspecialchars($key); ?></td>
            <td><?php echo htmlspecialchars($_GET[$key] ?? ''); ?></td>
        </tr>
        <?php } ?>
    </tbody>    
</table>
