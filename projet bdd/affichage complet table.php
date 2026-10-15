<!DOCTYPE html>
<html>
<head>
  <title>Ventes</title>
  <link rel="stylesheet" href="css/affichage.css">
  <meta charset="utf-8">
</head>
<body>
<main>
    <div class="nav-container">
        <?php include('boutons de navigation.php'); ?>
    </div>
    <h1>Nos ventes</h1>
    <p class="subtitle">
        Historique des ventes de la boulangerie
    </p>




    <div class="table-container">
        <?php
          include('connexionBDD.inc.php');
          $resultats = $bdd->query("SELECT * FROM vente");
          echo "<table>";
            echo("<tr>");
            echo("<td>" . 'date'. "</td>");
            echo("<td>" . 'heure'. "</td>");
            echo("<td>" . 'num_ticket'. "</td>");
            echo("<td>" . 'article'. "</td>");
            echo("<td>" . 'quantité'. "</td>");
            echo("<td>" . 'prix_u'. "</td>");
            echo("</tr>");

          $cont = 0;
          foreach($resultats as $vente) {
            echo("<tr>");
            echo("<td>" . $vente['date']. "</td>");
            echo("<td>" . $vente['heure']. "</td>");
            echo("<td>" . $vente['num_ticket']. "</td>");
            echo("<td>" . $vente['article']. "</td>");
            echo("<td>" . $vente['quantité']. "</td>");
            echo("<td>" . $vente['prix_u']. "</td>");
            echo("</tr>");
          
          }
          ?>
    </div>
</main>
</body>
</html>
