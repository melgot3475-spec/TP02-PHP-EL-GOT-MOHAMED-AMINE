<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5 - Conditions et mentions</title>
</head>
<body>
    <h1>Exercice 5 : Conditions if, elseif, else</h1>

    <?php
    // Fonction utilitaire pour déterminer le message selon la moyenne (évite la duplication lors des tests)
    function determinerMention($moyenne) {
        if ($moyenne < 0 || $moyenne > 20) {
            return "Note invalide";
        } elseif ($moyenne < 10) {
            return "Non validé";
        } elseif ($moyenne < 12) {
            return "Passable";
        } elseif ($moyenne < 14) {
            return "Assez bien";
        } elseif ($moyenne < 16) {
            return "Bien";
        } else {
            return "Très bien";
        }
    }

    // 1. Déclaration de la variable $moyenne principale
    $moyenne = 14;
    ?>

    <h2>1 à 3. Évaluation de la variable <code>$moyenne</code> actuelle</h2>
    <p>Moyenne déclarée : <strong><?= $moyenne ?></strong></p>
    <p>Résultat :
        <strong>
        <?php
        if ($moyenne < 0 || $moyenne > 20) {
            echo "Note invalide";
        } elseif ($moyenne < 10) {
            echo "Non validé";
        } elseif ($moyenne < 12) {
            echo "Passable";
        } elseif ($moyenne < 14) {
            echo "Assez bien";
        } elseif ($moyenne < 16) {
            echo "Bien";
        } else {
            echo "Très bien";
        }
        ?>
        </strong>
    </p>

    <h2>4. Récapitulatif des tests demandés (-1, 9, 10, 12, 14, 16, 21)</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Valeur de $moyenne</th>
                <th>Message obtenu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $valeursTests = [-1, 9, 10, 12, 14, 16, 21];
            foreach ($valeursTests as $valeurTest) {
                echo "<tr>";
                echo "<td>" . $valeurTest . "</td>";
                echo "<td>" . determinerMention($valeurTest) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
