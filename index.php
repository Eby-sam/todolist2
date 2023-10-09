<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Liste de Tâches</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <div id="title">
        <h1>Bienvenue sur Ma Liste de Tâches</h1>
        <p>Pour commencer, veuillez vous connecter ou vous inscrire :</p>
    </div>
    <div id="link">
        <button><a href="pages/inscription.php">S'inscrire</a></button>
        <button><a href="pages/connexion.php">Se connecter</a></button>
    </div>

</div>
</body>
</html>
