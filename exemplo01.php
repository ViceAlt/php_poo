<?php 

$joaoSalario = 1000;
$joaoPrevidencia = 100;
$joaoNome = 'João Filho';
$joaoDescontos = number_format($joaoSalario*0.275 + $joaoPrevidencia, 2, ',', '.');

echo "O valor do desconto de $joaoNome é $joaoDescontos. <br>";