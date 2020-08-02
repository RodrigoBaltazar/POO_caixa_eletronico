<?php

    //Carregando as classes
    include_once 'classes/pessoa.class.php';
    include_once 'classes/conta.class.php';

    //Criação do Objeto

    $john = new Pessoa;

    $john->id = 01;
    $john->nome = 'John';
    $john->altura = 1.77;
    $john->idade = 27;
    $john->nascimento = '10/05/1994';
    $john->escolaridade = 'B.Letras';    
    $john->salario = 0;

    echo "Manipulando o objeto $john->nome: \n";
    echo "{$john->nome} é formado em: {$john->escolaridade} \n";
    $john->formar('RockStar');
    echo "{$john->nome} é formado em: {$john->escolaridade} \n";

    echo "Possui {$john->idade} anos \n";
    $john->envelhecer(1);
    echo "Possui {$john->idade} anos \n";


    //Criacao Conta do Objeto

    $conta_John = new Conta;

    $conta_John->agencia = 001;
    $conta_John->codigo = 666;
    $conta_John->dataDeCriacao = '20/12/2020';
    $conta_John->titular = $john->nome;
    $conta_John->senha = 123;
    $conta_John->saldo = 0;
    $conta_John->cancelada = false;

    echo "Manipulando a conta de  {$conta_John->titular}: \n";
    echo "O saldo atual é de: $conta_John->saldo: \n";
    $conta_John->depositar(1500);
    echo "O saldo atual é de: $conta_John->saldo \n";
    $conta_John->retirar(300);
    echo "Saldo atual de: " . $conta_John->obterSaldo() . "\n";
?>