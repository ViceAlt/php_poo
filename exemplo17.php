<?php

class Visibilidade {
    public $varPublic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic,  $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }
    
    public function publicFunc(){
        echo "Metódo Público<br>";
    }

    public function protectedFunc(){
        echo "Metódo Protegido<br>";
    }

    public function privateFunc(){
        echo "Metódo Privado<br>";
    }
}

$teste = new visibilidade(1,2,3);
// echo "Atributo Public = $teste->varPublic";
// echo "Atributo Protected = $teste->varProtected";

echo "<br>";

$teste->publicFunc();
// $teste->protectFunc();
$teste->privateFunc();