<?php
//carrega as classes
include_once 'classes/pessoa.class.php';
include_once 'classes/conta.class.php';


//Criação do objeto pessoa

$john = new Pessoa(10, "John", 1.80, 27, '10/12/2020', 'Ens. Médio', 0);

echo "Manipulando o objeto {$john->nome}.\n";

$conta_john = new Conta(01, 001, '10/10/1999', $john->nome, 123, 10, false);

echo "\n";
echo "Manipulando a conta de: {$conta_john->titular} com saldo de R$:{$conta_john->saldo},00. ";
?>