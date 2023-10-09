<?php
require_once '../dao/imp/UtilisateurDaoImp.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['connexion'])) {
    $emailConnexion = $_POST['email'];
    $motDePasseConnexion = $_POST['mot_de_passe'];

    if (empty($emailConnexion) || empty($motDePasseConnexion)) {
        echo "Tous les champs sont obligatoires pour la connexion.";
    }

    else {
        $bdd = Data::getInstance();
        $pdo = $bdd->getPdo();
        $utilisateurDao = new UtilisateurDaoImp($pdo);
        $utilisateur = $utilisateurDao->connexion($emailConnexion, $motDePasseConnexion);

        if ($utilisateur) {
            session_start();
            $_SESSION['id'] = $utilisateur->getId();
            header("Location: /index.php");
            exit();
        }

        else {
            echo "Erreur de connexion. Vérifiez vos informations.";
        }
    }
}
