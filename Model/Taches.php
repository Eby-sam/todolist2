<?php


class Taches
{
    private $id;
    private $utilisateurId;
    private $titre;
    private $description;
    private $dateEcheance;
    private $dateCreation;
    private $statut;

    public function __construct($utilisateurId, $titre, $description, $dateEcheance, $dateCreation, $statut)
    {
        $this->utilisateurId = $utilisateurId;
        $this->titre = $titre;
        $this->description = $description;
        $this->dateEcheance = $dateEcheance;
        $this->dateCreation = $dateCreation;
        $this->statut = $statut;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUtilisateurId()
    {
        return $this->utilisateurId;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

