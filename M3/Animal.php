<?php

namespace M3;

abstract class Animal
{

    public function __construct(private $espece)
    {
    }

    public function __toString() : string {
        return 'Je suis de l\'espèce '.$this->espece."<br>";
    }
}