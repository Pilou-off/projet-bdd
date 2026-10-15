<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confirmation</title>
    <link rel="stylesheet" href="style_result.css">
</head>
<body>
<main>
<p>
<?php

if(!empty($_POST['boulangerie_choix']) &&!empty($_POST['date']) && !empty($_POST['heure']) && !empty($_POST['nb_ticket']) && !empty($_POST['article']) && !empty($_POST['qtt']) && !empty($_POST['prix'])) {
    include('connexionBDD.inc.php');    
    $requete = "INSERT INTO vente VALUES (NULL, '" . $_POST['boulangerie_choix'] . "', '" . $_POST['date'] . "', '" . $_POST['heure'] . "', '" . $_POST['nb_ticket'] . "', '" . $_POST['article'] . "', '" . $_POST['qtt'] . "', '" . $_POST['prix'] ."€"."')";
    $resultats = $bdd -> query($requete);
    $message = "La commande a été ajoutée 👍";
    echo "<p><h1>" . $message . "</h1></p>";
}
else {
    $message = "La commande n'a pas été ajoutée ⛔";
    echo "<p><strong><h1>" . $message . "</h1></strong></p>";  
}
?>
<p>
</main>
</body>
</html>