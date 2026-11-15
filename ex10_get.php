<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 10 - Traitement GET</title>
</head>
<body>
    <h1>Exercice 10 : Réception des données (Méthode GET)</h1>

    <?php
    // Partie C : Vérification de la présence des clés dans $_GET (évite "Undefined array key" en cas d'accès direct)
    if (!isset($_GET['nom']) || !isset($_GET['prenom']) || !isset($_GET['groupe'])) {
        echo "<p>Aucun formulaire n'a été soumis. Veuillez passer par le <a href='ex10_get.html'>formulaire GET</a> pour envoyer vos informations.</p>";
    } else {
        // Nettoyage des espaces inutiles avec trim()
        $nomBrut = trim($_GET['nom']);
        $prenomBrut = trim($_GET['prenom']);
        $groupeBrut = trim($_GET['groupe']);

        // Vérification que les champs ne sont pas vides
        if ($nomBrut === "" || $prenomBrut === "" || $groupeBrut === "") {
            echo "<p style='color: red;'><strong>Erreur :</strong> Tous les champs (nom, prénom et groupe) sont obligatoires et ne peuvent pas être vides.</p>";
            echo "<p><a href='ex10_get.html'>Retourner au formulaire GET</a></p>";
        } else {
            // Protection contre les failles XSS avec htmlspecialchars()
            $nom = htmlspecialchars($nomBrut, ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($prenomBrut, ENT_QUOTES, 'UTF-8');
            $groupe = htmlspecialchars($groupeBrut, ENT_QUOTES, 'UTF-8');

            echo "<p>Bienvenue <strong>" . $prenom . " " . $nom . "</strong> ! Vous êtes affecté(e) au groupe <strong>" . $groupe . "</strong> (transmis via GET).</p>";
        }
    }
    ?>

    <p><a href="ex10_get.html">Retour au formulaire GET</a> | <a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
