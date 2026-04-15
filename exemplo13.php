<?php

class Conta
{
    //Atributos - Propriedades - Campos
    public $numero;
    public $saldo;

    //Método Construtor
    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    //Métodos
    function creditar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    function debitar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }
    function transferir($outraConta, $valor)
    {
        if ($this->saldo > $valor){
            $this->debitar($valor);
            $outraConta->creditar($valor);
        }
    }
}

class Poupança extends Conta
{
    public $juros;

    function __construct($numero, $saldo, $juros)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
        $this->juros = $juros;
    }

    function atualizarJuros()
    {
        $this->saldo = $this->saldo * (1 + $this->juros);

    }
}

$Conta = new Conta(1, 150);
$Conta->creditar(50);
$Conta->debitar(100);
echo "Saldo da conta $Conta->numero: $Conta->saldo <br>";

$poupança = new Poupança(2, 150, 0.10);
$poupança->creditar(50);
$poupança->debitar(100);
$poupança->atualizarJuros();
echo "Saldo da Poupança $poupança->numero: $poupança->saldo <br>";
