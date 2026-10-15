<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Formulaire d'ajout</title>
    <link rel="stylesheet" href="style_form.css">
</head>

<body>
    <main>
        <form action="./result_ajout.php" method="POST">
            <h1>Ajout de commandes</h1>

            <p>
                <label for="boulangerie_nom">Choisissez une boulangerie:</label>

                <select name="boulangerie_choix">
                    <?php
                    include('connexionBDD.inc.php');
                    $requete = "SELECT * FROM boulangerie_nom ORDER BY nom ASC";
                    $resultats = $bdd->query($requete);
                    echo "<option value=''>-- Sélectionnez une boulangerie --</option>";
                    foreach ($resultats as $boulangerie) {
                        echo "<option value='" . $boulangerie['idb'] . "'>" . htmlspecialchars($boulangerie['nom'], ENT_QUOTES) . "</option>";
                    }

                    ?>
                </select>
            </p>

            <p>
                <label for="date">La date de commande :</label>
                <input 
                    type="date" 
                    id="date" 
                    name="date"
                />
            </p>
            <p>
                <label for="heure">L'heure :</label>
                <input 
                    type="time"
                    id="heure" 
                    name="heure"
                />
            </p>
            <p>
                <label for="nb_ticket">Le numéro de ticket :</label>
                <input 
                    type="number" 
                    maxlength="7"
                    id="nb_ticket" 
                    name="nb_ticket"
                    placeholder="Ex. : 123456"
                />
            </p>
            <p>
                <label for="article">L'arcticle commandé :</label>
                <input 
                    type="text" 
                    style="text-transform: uppercase;"
                    id="article" 
                    name="article"
                    placeholder="Ex. : PAIN AU CHOCOLAT"
                />
            </p>
            <p>
                <label for="qtt">La quantité :</label>
                <input 
                    type="number" 
                    id="qtt" 
                    name="qtt"
                    min="1"
                    step="1"
                    placeholder="Ex. : 2"
                />
            </p>
            <p>
                <label for="prix">Le prix unitaire :</label>
                <input
                    type="number"
                    id="prix"
                    name="prix"
                    min="0"
                    step="0.01"
                    placeholder="Ex. : 1.20"
                />
            </p>
            <p>
            <input type="submit" name="submit" value="Ajout" />
            </p>
        </form>
        
    </main>
</body>
</html>