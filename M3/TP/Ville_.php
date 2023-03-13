<?php

class Ville_
{
    private string $nom;
    private string $departement;

    private static string $villelepluslong = "";

    /**
     * @param string $nom
     * @param string $departement
     */
    public function __construct(string $nom, string $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
        if (strlen(static::$villelepluslong) < strlen($this->nom) ){
            static::$villelepluslong = $this->nom;
        }
    }

    public static function getVilleNomLePlusLong() : string {
        return self::$villelepluslong;
    }


    public function affichage() {
        echo "la ville ".$this->nom." est dans le département ".$this->departement."<br>";
    }




}