<?php

class ContaCorrente extends Conta
{
    var $limite;

    //metodo construtor sobreescrito com $limite

    function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada, $limite)
    {
        parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada, $limite);
        $this->limite = $limite;
    }

    //metodo retirar sobreescrito

    function retirar($quantia)
    {
        //imposto sobre movimentacao financeira
        $cpmf = 0.05;
        if(($this->saldo + $this->limite) >= $quantia)
        {
            parent::retirar($quantia);
            parent::retirar($quantia * $cpmf);
        }
        else
        {
            echo "retirada nao permitida!";
            return false;
        }
        return true;
    }
}


?>