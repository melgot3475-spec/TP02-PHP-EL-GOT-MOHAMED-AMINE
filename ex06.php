<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Switch et date()</title>
</head>
<body>
    <h1>Exercice 6 : Structure switch et mois de l'année</h1>

    <?php
    // Fonction avec switch pour obtenir le nom du mois
    function obtenirNomMois($numeroMois) {
        switch ($numeroMois) {
            case 1:
                return "Janvier";
            case 2:
                return "Février";
            case 3:
                return "Mars";
            case 4:
                return "Avril";
            case 5:
                return "Mai";
            case 6:
                return "Juin";
            case 7:
                return "Juillet";
            case 8:
                return "Août";
            case 9:
                return "Septembre";
            case 10:
                return "Octobre";
            case 11:
                return "Novembre";
            case 12:
                return "Décembre";
            default:
                return "Numéro de mois invalide";
        }
    }

    // 1 à 4. Tests des valeurs 1, 3, 12 et 15
    $valeursTestMois = [1, 3, 12, 15];
    ?>

    <h2>1 à 4. Tests avec les numéros de mois 1, 3, 12 et 15</h2>
    <ul>
        <?php foreach ($valeursTestMois as $testMois): ?>
            <li>Numéro <strong><?= $testMois ?></strong> : <?= obtenirNomMois($testMois) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>5. Affichage du mois courant du serveur avec <code>(int) date("m")</code></h2>
    <?php
    // 5. Remplacement de la valeur fixe par (int) date("m")
    $numeroMois = (int) date("m");
    $nomMoisCourant = "";

    switch ($numeroMois) {
        case 1:  $nomMoisCourant = "Janvier"; break;
        case 2:  $nomMoisCourant = "Février"; break;
        case 3:  $nomMoisCourant = "Mars"; break;
        case 4:  $nomMoisCourant = "Avril"; break;
        case 5:  $nomMoisCourant = "Mai"; break;
        case 6:  $nomMoisCourant = "Juin"; break;
        case 7:  $nomMoisCourant = "Juillet"; break;
        case 8:  $nomMoisCourant = "Août"; break;
        case 9:  $nomMoisCourant = "Septembre"; break;
        case 10: $nomMoisCourant = "Octobre"; break;
        case 11: $nomMoisCourant = "Novembre"; break;
        case 12: $nomMoisCourant = "Décembre"; break;
        default: $nomMoisCourant = "Numéro de mois invalide"; break;
    }
    ?>
    <p>Le numéro du mois courant du serveur est <strong><?= $numeroMois ?></strong>, ce qui correspond à : <strong><?= $nomMoisCourant ?></strong>.</p>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
