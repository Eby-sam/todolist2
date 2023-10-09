<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="container">
    <h2>Connexion</h2>
    <form action="../services/ConnexionService.php" method="POST">
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>

        <button type="submit" name="connexion">Se connecter</button>
    </form>
    <p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous ici</a></p>
    <a href="../index.php">Home</a>
</div>

<script src="../assets/js/app.js"></script>
</body>
</html>
