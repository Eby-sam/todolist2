<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/Bdd/Data.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/dao/UtilisateurDao.php';

class UtilisateurDaoImp implements UtilisateurDao {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function createUtilisateur($nom, $prenom, $email, $motDePasse) {
        $motDePasseHash = password_hash($motDePasse, PASSWORD_DEFAULT);
        $stmt = $this->pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nom, $prenom, $email, $motDePasseHash]);
    }

    public function getUtilisateurParEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUtilisateur($id, $nom, $prenom, $email) {
        $stmt = $this->pdo->prepare("UPDATE utilisateurs SET nom = ?, prenom = ?, email = ? WHERE id = ?");
        $stmt->execute([$nom, $prenom, $email, $id]);
    }

    public function deleteUtilisateur($id) {
        $stmt = $this->pdo->prepare("DELETE FROM utilisateurs WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function connexion(string $email, string $password) {

        if (empty($email) || empty($password)) {
            return false;
        }

        $bdd = Data::getInstance();
        $pdo = $bdd->getPdo();
        $utilisateurDao = new UtilisateurDaoImp($pdo);
        $utilisateur = $utilisateurDao->getUtilisateurParEmail($email);

        if ($utilisateur && password_verify($password, $utilisateur->getMotDePasse())) {

            session_start();
            $_SESSION['id'] = $utilisateur->getId();
            header('Location: /');
            exit();

        }

        else {
            return false;

        }
    }


}

