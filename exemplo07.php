    <?php

class Conta{
    public $numero;
    public $saldo;

    function __construct($numero, $saldo)
    {
        //o uso do pseudo-variavel $this acessa a variavel public
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

        function creditar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }
}


    
    
    
