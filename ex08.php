<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Contrôle des itérations</title>
</head>
<body>
    <h1>Exercice 8 : Boucles while, do-while, continue et break</h1>

    <!-- Partie 1 -->
    <section>
        <h2>Partie 1 : Nombres pairs de 0 à 20 avec while (10 en gras)</h2>
        <p>
            <?php
            $pair = 0;
            while ($pair <= 20) {
                if ($pair === 10) {
                    echo "<strong>" . $pair . "</strong> ";
                } else {
                    echo $pair . " ";
                }
                $pair += 2;
            }
            ?>
        </p>
    </section>

    <hr>

    <!-- Partie 2 -->
    <section>
        <h2>Partie 2 : Comparaison while vs do-while (compteur initialisé à 5, condition &lt; 5)</h2>
        <?php
        // Test avec while
        $compteur = 5;
        $executionsWhile = 0;
        while ($compteur < 5) {
            $executionsWhile++;
            $compteur++;
        }

        // Réinitialisation du compteur avant do-while
        $compteur = 5;
        $executionsDoWhile = 0;
        do {
            $executionsDoWhile++;
            $compteur++;
        } while ($compteur < 5);
        ?>
        <ul>
            <li>Nombre d'exécutions avec <code>while ($compteur &lt; 5)</code> : <strong><?= $executionsWhile ?></strong></li>
            <li>Nombre d'exécutions avec <code>do ... while ($compteur &lt; 5)</code> : <strong><?= $executionsDoWhile ?></strong></li>
        </ul>
    </section>

    <hr>

    <!-- Partie 3 -->
    <section>
        <h2>Partie 3 : Parcourir de 1 à 20 (ignorer les multiples de 3 avec continue, arrêter à 16 avec break)</h2>
        <p>
            <?php
            for ($compteur = 1; $compteur <= 20; $compteur++) {
                // Arrêter la boucle dès que le compteur atteint 16, avant son affichage
                if ($compteur === 16) {
                    break;
                }
                // Ignorer les multiples de 3
                if ($compteur % 3 === 0) {
                    continue;
                }
                echo $compteur . " ";
            }
            ?>
        </p>
    </section>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
