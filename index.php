<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Liste de Tâches</title>
    <!-- Lien vers votre feuille de style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <h1>Bienvenue sur Ma Liste de Tâches</h1>
    <p>Pour commencer, veuillez vous connecter ou vous inscrire :</p>
    <ul>
        <li><a href="pages/connexion.php">Se connecter</a></li>
        <li><a href="pages/inscription.php">S'inscrire</a></li>
    </ul>
</div>
</body>
</html>
