<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Tableaux associatifs</title>
    <style>
        table { border-collapse: collapse; width: 450px; margin-bottom: 20px; }
        th, td { border: 1px solid #333; padding: 8px 12px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Exercice 9 : Exploitation d'un tableau associatif de notes</h1>

    <?php
    // Jeu de données fourni dans l'énoncé
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $sommeNotes = 0;
    $nbEtudiantsValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";
    $nombreTotalEtudiants = count($notes);
    ?>

    <h2>1 & 2. Tableau HTML des étudiants et résultats de validation</h2>
    <table>
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Note / 20</th>
                <th>Statut (Seuil = 10)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $etudiant => $note): ?>
                <?php
                // Calculs cumulés pendant le parcours foreach
                $sommeNotes += $note;

                if ($note >= 10) {
                    $statut = "Validé";
                    $nbEtudiantsValides++;
                } else {
                    $statut = "Non validé";
                }

                if ($note > $meilleureNote) {
                    $meilleureNote = $note;
                    $meilleurEtudiant = $etudiant;
                }
                ?>
                <tr>
                    <td><?= htmlspecialchars($etudiant, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= $note ?></td>
                    <td><?= $statut ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php
    // 3. Calcul de la moyenne de la classe
    $moyenneClasse = $sommeNotes / $nombreTotalEtudiants;
    ?>

    <h2>3 à 5. Statistiques de la classe</h2>
    <ul>
        <li><strong>Somme des notes :</strong> <?= $sommeNotes ?></li>
        <li><strong>Moyenne de la classe :</strong> <?= $moyenneClasse ?> / 20</li>
        <li><strong>Nombre d'étudiants ayant validé (&ge; 10) :</strong> <?= $nbEtudiantsValides ?></li>
        <li><strong>Meilleure note :</strong> <?= $meilleureNote ?> / 20 (obtenue par <strong><?= htmlspecialchars($meilleurEtudiant, ENT_QUOTES, 'UTF-8') ?></strong>)</li>
    </ul>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
