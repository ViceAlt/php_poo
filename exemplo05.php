<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $previdencia;
    public $descontos;
    public $tipoFuncionario;
    function __construct($nome, $salario, $previdencia);
    }

    function __construct($nome, $salario, $previdencia)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
        $this->descontos = $this->calcularDescontos();
        $this->tipoFuncionario = $this->categorizarFuncionario();
    }

    function calcularDescontos()
    {
        return number_format($this->salario*0.2745 + $this->previdencia, 2, ',', '.');
    }

    function caregorizarFuncionario(): string
    {
        $salario = $this->salario;

        if($salario >= 1000 &&  $salario < 2000){
            $tipoFuncionario = "junior";
        } else if ($salario >= 2000 && $salario < 3000){
            $tipoFuncionario = "Pleno";
        } else if ($salario >= 3000) {
            $tipoFuncionario = "Sênior";
        }else {
            $tipoFuncionario = "Estágiario";
        }

        return $tipoFuncionario;
    }
}

$joao = new Funcionario('João Filho', 1000, 100);
$maria = new Funcionario('Maria Rute', 2000, 200);
$jose = new Funcionario('José Salgado', 2000, 200);

echo "O Valor do desconto de $joao->nome é $joao->tipoFuncionario e o Valor do desconto é de R$ $joao->descontos. <br>";

echo "O Valor do desconto de $maria->nome é $maria->tipoFuncionario e o Valor do desconto é de R$ $maria->descontos. <br>";
echo "O Valor do desconto de $jose->nome é $jose->tipoFuncionario e o Valor do desconto é de R$ $jose->descontos. <br>";