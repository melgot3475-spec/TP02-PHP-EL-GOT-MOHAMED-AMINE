<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1 - Affichage PHP</title>
</head>
<body>
    <h1>Exercice 1 : Balises, commentaires et echo</h1>

    <?php
    // Commentaire sur une seule ligne : affichage du message de bienvenue
    echo "<p>Bienvenue dans mon TP PHP</p>";

    /*
     * Commentaire sur plusieurs lignes :
     * Affichage d'un nom, d'un prénom fictifs et du groupe de TP
     * sur des lignes distinctes en HTML.
     */
    $nomEtudiant = "El got";
    $prenomEtudiant = "Mohamed Amine";
    $groupeTp = "G1";

    echo "<p>Nom : " . $nomEtudiant . "</p>";
    echo "<p>Prénom : " . $prenomEtudiant . "</p>";
    echo "<p>Groupe : " . $groupeTp . "</p>";
    ?>

    <p><?= "Cette dernière phrase est affichée avec la balise courte PHP." ?></p>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
