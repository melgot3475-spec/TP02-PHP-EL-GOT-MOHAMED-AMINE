<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Variables et concaténation</title>
</head>
<body>
    <h1>Exercice 2 : Variables, casse et concaténation</h1>

    <?php
    // 1. Déclaration des variables avec des données fictives
    $nom = "El got";
    $prenom = "Mohamed Amine";
    $age = 20;
    $formation = "Programmation Web 2 (I.AP)";

    // 2. Construction de la phrase de présentation avec la concaténation (.)
    $phrasePresentation = "Bonjour, je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis la formation " . $formation . ". ";

    // 3. Compléter la phrase avec l'opérateur .=
    $phrasePresentation .= "J'apprends PHP.";

    echo "<p>" . $phrasePresentation . "</p>";

    // 4. Sensibilité à la casse : $note et $Note
    $note = 12;
    $Note = 16;

    echo "<p>Valeur de \$note (minuscule) : <strong>" . $note . "</strong></p>";
    echo "<p>Valeur de \$Note (majuscule) : <strong>" . $Note . "</strong></p>";
    ?>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
