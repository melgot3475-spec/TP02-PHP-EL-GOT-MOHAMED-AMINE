<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - Types et conversions</title>
</head>
<body>
    <h1>Exercice 4 : Types de données et conversions (Casting)</h1>

    <?php
    // 1. Déclaration des 6 variables
    $entier = 42;
    $chaineNombre = "42";
    $flottant = 15.8;
    $booleenVrai = true;
    $booleenFaux = false;
    $valeurNulle = null;
    ?>

    <h2>1 & 2. Examen des types et valeurs avec var_dump()</h2>
    <pre><?php
var_dump($entier);
var_dump($chaineNombre);
var_dump($flottant);
var_dump($booleenVrai);
var_dump($booleenFaux);
var_dump($valeurNulle);
    ?></pre>

    <h2>3. Conversions explicites de types</h2>
    <?php
    $chaineVersEntier = (int) $chaineNombre; // "42" -> 42
    $flottantVersEntier = (int) $flottant;   // 15.8 -> 15
    $entierVersChaine = (string) $entier;    // 42 -> "42"
    ?>
    <pre><?php
echo 'Conversion de "42" en entier : ';
var_dump($chaineVersEntier);

echo 'Conversion de 15.8 en entier : ';
var_dump($flottantVersEntier);

echo 'Conversion de 42 en chaîne : ';
var_dump($entierVersChaine);
    ?></pre>

    <h2>4. Affichage de true et false avec echo puis var_dump()</h2>
    <p>Affichage avec <code>echo true</code> : [<?php echo $booleenVrai; ?>]</p>
    <p>Affichage avec <code>echo false</code> : [<?php echo $booleenFaux; ?>] <em>(affiche une chaîne vide)</em></p>
    <pre><?php
echo "var_dump(true)  : ";
var_dump($booleenVrai);
echo "var_dump(false) : ";
var_dump($booleenFaux);
    ?></pre>

    <h2>5. Conversions en booléens</h2>
    <?php
    $boolZeroEntier = (bool) 0;
    $boolZeroChaine = (bool) "0";
    $boolChainePHP  = (bool) "PHP";
    $boolTableauVide = (bool) [];
    ?>
    <pre><?php
echo '(bool) 0     : ';
var_dump($boolZeroEntier);

echo '(bool) "0"   : ';
var_dump($boolZeroChaine);

echo '(bool) "PHP" : ';
var_dump($boolChainePHP);

echo '(bool) []    : ';
var_dump($boolTableauVide);
    ?></pre>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
