<?php

namespace M3;

class UtilisateurAvecMatricule extends Utilisateur
{

    private int $matricule;
    private static int $nbUtilisateurAvecMatricule = 0;

    /**
     * @param int $matricule
     */
    public function __construct(string $nom, string $prenom)
    {
        parent::__construct($nom, $prenom);
        static::$nbUtilisateurAvecMatricule++;
        $this->matricule = static::$nbUtilisateurAvecMatricule;
    }

    /**
     * @return int
     */
    public function getMatricule(): int
    {
        return $this->matricule;
    }

    /**
     * @param int $matricule
     */
    public function setMatricule(int $matricule): void
    {
        $this->matricule = $matricule;
    }

    /**
     * @return int
     */
    public static function getNbUtilisateurAvecMatricule(): int
    {
        return self::$nbUtilisateurAvecMatricule;
    }

    /**
     * @param int $nbUtilisateurAvecMatricule
     */
    public static function setNbUtilisateurAvecMatricule(int $nbUtilisateurAvecMatricule): void
    {
        self::$nbUtilisateurAvecMatricule = $nbUtilisateurAvecMatricule;
    }

    public function informations()
    {
        return parent::informations()." Matricule : ". $this->matricule. "<br>"; // TODO: Change the autogenerated stub
    }


}