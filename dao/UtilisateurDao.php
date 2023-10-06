<?php



interface UtilisateurDao {
    public function createUtilisateur($nom, $prenom, $email, $motDePasse);
    public function getUtilisateurParEmail($email);
    public function updateUtilisateur($id, $nom, $prenom, $email);
    public function deleteUtilisateur($id);
    public function connexion(string $email, string $password);
}

