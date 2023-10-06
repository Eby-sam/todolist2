<?php

require_once '../dao/imp/UtilisateurDaoImp.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $motDePasse = $_POST['mot_de_passe'];


    if (empty($nom) || empty($prenom) || empty($email) || empty($motDePasse)) {
        echo "Tous les champs sont obligatoires.";
    }

    else {
        $bdd = Data::getInstance();
        $pdo = $bdd->getPdo();
        $utilisateurDao = new UtilisateurDaoImp($pdo);
        $utilisateurDao->createUtilisateur($nom, $prenom, $email, $motDePasse);
        header("Location: /pages/connexion.php");
        exit();
    }
};





