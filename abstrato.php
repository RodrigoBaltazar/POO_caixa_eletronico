<?php

    include_once 'classes/pessoa.class.php';
    include_once 'classes/conta.class.php';
    include_once 'classes/contaCorrente.class.php';
    include_once 'classes/contaPoupanca.class.php';

    $john = new Pessoa(01, "João", 1.86, 25, 72, "Ens. médio", 650.00);

    $conta = new ContaPoupanca(666, "CP.1234", "10/10/2020", $john->nome, 123, 500.00, '10/07');

    

?>