<?php

class ContaPoupanca extends Conta
{
    var $aniversario;
    //metodo construtor sobreescrito

    function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $aniversario)
    {
        //chamada de metodo construtor da classe pai
        parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, false);
        $this->aniversario = $aniversario;
    }

    //metodo retirar sobreescrito
    function retirar($quantia)
    {
        if($this->saldo >= $quantia)
        {
            parent::retirar($quantia);
        }
        else
        {
            echo "REtirada nao permitida!";
            return false;
        }

        //retirada permitida
        return true;
    }
}

?>