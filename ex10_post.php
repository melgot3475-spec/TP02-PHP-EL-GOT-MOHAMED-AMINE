<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 10 - Traitement POST</title>
</head>
<body>
    <h1>Exercice 10 : Réception des données (Méthode POST)</h1>

    <?php
    // Partie C : Vérification de la présence des clés dans $_POST (évite "Undefined array key" en cas d'accès direct)
    if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['groupe'])) {
        echo "<p>Aucun formulaire n'a été soumis. Veuillez passer par le <a href='ex10_post.html'>formulaire POST</a> pour envoyer vos informations.</p>";
    } else {
        // Nettoyage des espaces inutiles avec trim()
        $nomBrut = trim($_POST['nom']);
        $prenomBrut = trim($_POST['prenom']);
        $groupeBrut = trim($_POST['groupe']);

        // Vérification que les champs ne sont pas vides
        if ($nomBrut === "" || $prenomBrut === "" || $groupeBrut === "") {
            echo "<p style='color: red;'><strong>Erreur :</strong> Tous les champs (nom, prénom et groupe) sont obligatoires et ne peuvent pas être vides.</p>";
            echo "<p><a href='ex10_post.html'>Retourner au formulaire POST</a></p>";
        } else {
            // Protection contre les failles XSS avec htmlspecialchars()
            $nom = htmlspecialchars($nomBrut, ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($prenomBrut, ENT_QUOTES, 'UTF-8');
            $groupe = htmlspecialchars($groupeBrut, ENT_QUOTES, 'UTF-8');

            echo "<p>Bienvenue <strong>" . $prenom . " " . $nom . "</strong> ! Vous êtes affecté(e) au groupe <strong>" . $groupe . "</strong> (transmis via POST).</p>";
        }
    }
    ?>

    <p><a href="ex10_post.html">Retour au formulaire POST</a> | <a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
