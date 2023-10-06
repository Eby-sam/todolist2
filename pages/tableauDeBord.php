<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="container">
    <h2>Tableau de bord</h2>
    <!-- Affichez ici la liste des tâches de l'utilisateur -->
    <ul>
        <li>Tâche 1</li>
        <li>Tâche 2</li>
        <!-- ... -->
    </ul>
    <form action="ajouter_tache.php" method="POST">
        <label for="titre">Titre de la tâche :</label>
        <input type="text" id="titre" name="titre" required>

        <label for="description">Description :</label>
        <textarea id="description" name="description"></textarea>

        <label for="date_echeance">Date d'échéance :</label>
        <input type="date" id="date_echeance" name="date_echeance">

        <button type="submit">Ajouter une tâche</button>
    </form>
    <p><a href="deconnexion.php">Se déconnecter</a></p>
</div>

<script src="../assets/js/app.js"></script>
</body>
</html>
