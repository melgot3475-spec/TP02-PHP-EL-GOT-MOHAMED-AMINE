<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Constantes et calculs</title>
</head>
<body>
    <h1>Exercice 3 : Constantes, calculs et affectation composée</h1>

    <?php
    // 1. Définition des constantes
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    // 2. Déclaration du prix unitaire HT et de la quantité
    $prixUnitaireHT = 60;
    $quantite = 3;

    // 3. Calcul du total HT, du montant de la TVA et du total TTC
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * (TAUX_TVA / 100);
    $totalTTC = $totalHT + $montantTVA;

    // Sauvegarde du total TTC avant livraison pour l'affichage récapitulatif
    $totalTTCAvantLivraison = $totalTTC;

    // 4. Ajout de 15 MAD de frais de livraison avec l'opérateur +=
    $fraisLivraison = 15;
    $totalTTC += $fraisLivraison;
    ?>

    <h2>Récapitulatif de la commande</h2>
    <ul>
        <li>Prix unitaire HT : <?= $prixUnitaireHT . " " . DEVISE ?></li>
        <li>Quantité : <?= $quantite ?></li>
        <li><strong>Total HT :</strong> <?= $totalHT . " " . DEVISE ?></li>
        <li><strong>Montant TVA (<?= TAUX_TVA ?>%) :</strong> <?= $montantTVA . " " . DEVISE ?></li>
        <li><strong>Total TTC (avant livraison) :</strong> <?= $totalTTCAvantLivraison . " " . DEVISE ?></li>
        <li>Frais de livraison : <?= $fraisLivraison . " " . DEVISE ?></li>
        <li><strong>Montant final TTC (avec livraison) :</strong> <?= $totalTTC . " " . DEVISE ?></li>
    </ul>

    <h2>Vérification de la constante TAUX_TVA</h2>
    <p>
        <?php
        // 5. Vérification de l'existence de TAUX_TVA avec defined()
        if (defined("TAUX_TVA")) {
            echo "La constante <code>TAUX_TVA</code> est bien définie et vaut " . TAUX_TVA . "%.";
        } else {
            echo "La constante <code>TAUX_TVA</code> n'est pas définie.";
        }
        ?>
    </p>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
