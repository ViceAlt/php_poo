<?php


class Funcionario
{
    public $nome;
    public $salario;
    public $previdencia;
    public $desconto;
    public $tipoFuncionario;
    function __construct($nome, $salario, $previdencia)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
        $this->desconto = $this-> calcularDescontos();
        $this -> tipoFuncionario = $this -> categorizarFuncionario();
    }

    function calcularDescontos(){
        return number_format($this->salario * 0.275 + $this->previdencia, 2, ",", ".");
    }
    function categorizarFuncionario(): string
    {
        $salario = $this->salario;

        if ($salario >= 1000 && $salario < 2000){
            $tipoFuncionario =  "Junior";
        }else if ($salario >= 2000 && $salario < 3000){
            $tipoFuncionario =  "Pleno";
        }else if( $salario >= 3000){
            $tipoFuncionario =  "Senior";
        }else{
            $tipoFuncionario = "Estagiário";
        }

        return $tipoFuncionario;
    }
}

$joao = new Funcionario('Joao Filho', 1000, 100);

$maria = new Funcionario('Maria Rute', 2000, 200);

$jose = new Funcionario('Jose Salgado', 3000, 300);

echo  "{$joao -> tipoFuncionario}" ;