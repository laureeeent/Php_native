<?php

namespace M3;

class Utilisateur
{

    private String $nom;
    private String $prenom;

    /**
     * @param String $nom
     * @param String $prenom
     */
    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /**
     * @return String
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param String $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return String
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param String $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function informations() {
        return 'Nom : '. $this->nom . ' <br> prenom : '. $this->prenom .'<br>';
    }

}