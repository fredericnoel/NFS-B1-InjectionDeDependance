<?php

namespace classes;

class Adresse
{
    public $numero;
    public $rue;
    public $cp;
    public $ville;
    public $pays;

    public function __construct($numero, $rue, $cp, $ville, $pays)
    {
        $this->numero = $numero;
        $this->rue = $rue;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->pays = $pays;
    }
}
