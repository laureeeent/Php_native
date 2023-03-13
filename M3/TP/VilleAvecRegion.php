<?php

class VilleAvecRegion extends Ville
{
    private string $region;

    /**
     * @param string $region
     */
    public function __construct(string $nom, string $departement, string $region)
    {
        parent::setNom($nom);
        parent::setDepartement($departement);
        $this->region = $region;
    }

    public function affichage()
    {
        echo "La ville ".parent::getNom()." est dans le département ".
            parent::getDepartement()." de la région ".$this->region."<br>";
    }


}