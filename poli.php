<?php

    include_once 'classes/pessoa.class.php';
    include_once 'classes/conta.class.php';
    include_once 'classes/contaCorrente.class.php';
    include_once 'classes/contaPoupanca.class.php';

    $john = new Pessoa(001,"João", 1.76, 27, '10/10/1994', "Ens. Médio", 650.00);

    echo "Manipulando objeto {$john->nome} \n";

    $conta_john[0] = new ContaCorrente(1001, "CC.1001", "10/10/2020", $john->nome, 123, 500, false, 500);
    $conta_john[1] = new ContaPoupanca(1002, "CP.1002", "10/10/2020", $john->nome, 123, 500, false, '10/10');

    foreach ($conta_john as $key => $conta_john)
    {
        echo "Manipulando a conta $key de: {$conta_john->titular}.\n";
        echo "O saldo atual da conta $key é de: {$conta_john->obterSaldo()}. \n";
        $conta_john->depositar(100);
        echo "O saldo atual da conta $key é de: {$conta_john->obterSaldo()}. \n";
        $conta_john->retirar(50);
        echo "O saldo atual da conta $key é de: {$conta_john->obterSaldo()}. \n";
    }
?>