<?php 
$message = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
$user = $_POST["User"];
$password = $_POST["Password"];


if ($user === "John" && $password === "Rambo") {

    $message = "C’est pas ma guerre";
    }
    else {
    $message = "Votre pire cauchemar";
    }
}
?>

<html>
    <head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" />
    <title>Formulaire</title>

    </head>
    <form method="post">
        <label for="User"> </label>
        <input type="text" name="User" placeholder="User"></input>
         <label for="Password"> </label>
        <input type="password" name="Password" placeholder="Password"></input>
        <input type="submit" id="submit" name="submit" value="Envoyer"></input>
    </form>
    <?php echo $message ?>
<!-- <table>
    <thead>
        <tr>
            <td></td>
            <td></td>
        </tr>    
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>

</table> -->
</html>