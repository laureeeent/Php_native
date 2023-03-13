<?php


namespace M3;

class UtilisateurAvecCouleur extends Utilisateur
{
    private String $couleur;

    /**
     * @param String $couleur
     */
    public function __construct(string $nom, string $prenom, string $couleur)
    {
        parent::__construct($nom, $prenom);
        $this->couleur = $couleur;
    }

    /**
     * @return String
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param String $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }


    public function informations() {
        return parent::informations() . " Couleur : ".$this->couleur. "<br>";
    }


}