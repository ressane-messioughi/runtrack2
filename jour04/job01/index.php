
<?php

$nb_argument = 0;
$argument = array('Nom','Prenom','AdresseMail','NumTel','MDP');


foreach ($argument as $arguments){
  if (isset($_GET[$arguments]) && $_GET[$arguments] <> ""){
    $nb_argument++;

  }
  }
  echo $nb_argument . " Est le nombre d'arguments dans ce formulaire";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link href="style.css" rel="stylesheet" />
  <title>Formulaire</title>
</head>

<body>
<h1 style="text-decoration: underline; text-align: center; border-style: solid; width: 50% ;margin: auto; margin-bottom: 20px;border-width: 10px"> METHODE $_GET !</h1>
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


</body>
</html>
