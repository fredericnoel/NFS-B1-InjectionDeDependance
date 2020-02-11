<?php

namespace classes;

class Client
{
    public $adresse;

    public function __construct($numero, $rue, $cp, $ville, $pays)
    {
        $this->adresse = new Adresse($numero, $rue, $cp, $ville, $pays);
    }
}
