<?php

class Ville
{
    private string $nom;
    private int $departement;


    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getDepartement(): int
    {
        return $this->departement;
    }

    /**
     * @param string $departement
     */
    public function setDepartement(int $departement): void
    {
        $this->departement = $departement;
    }

    public function affichage() {
        echo "la ville ".$this->nom." est dans le département ".$this->departement."<br>";
    }


}