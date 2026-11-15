<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - Boucles for</title>
</head>
<body>
    <h1>Exercice 7 : Boucles for et boucles imbriquées</h1>

    <!-- Section 1 : Table de multiplication -->
    <section>
        <h2>1. Table de multiplication de 7 (de 1 à 10)</h2>
        <?php
        $nombre = 7;
        for ($i = 1; $i <= 10; $i++) {
            $resultat = $nombre * $i;
            echo $nombre . " × " . $i . " = " . $resultat . "<br>";
        }
        ?>
    </section>

    <hr>

    <!-- Section 2 : Pyramide d'étoiles -->
    <section>
        <h2>2. Pyramide de 6 lignes d'étoiles</h2>
        <pre><?php
        $nombreLignes = 6;
        for ($ligne = 1; $ligne <= $nombreLignes; $ligne++) {
            for ($etoile = 1; $etoile <= $ligne; $etoile++) {
                echo "*";
            }
            echo "
";
        }
        ?></pre>
    </section>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
