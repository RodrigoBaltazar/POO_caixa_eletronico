<?php

abstract class Conta
{
    public $agencia;
    public $codigo;
    public $dataDeCriacao;
    public $titular;
    public $senha;
    public $saldo;
    public $cancelada;


    function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada)
    {
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataDeCriacao = $dataDeCriacao;
        $this->titular = $titular;
        $this->senha = $senha;
        $this->cancelada = $cancelada;
        //metodos construtores da classe
        $this->depositar($saldo);
        $this->cancelada = false;
    }

    function __destruct()
    {
        echo "Objeto conta {$this->codigo} de {$this->titular} finalizada...";
    }
    function retirar($quantia)
    {
        if($quantia > 0)
        {
            $this->saldo -= $quantia;
        }
    }

    abstract function transferir($conta, $valor);

    function depositar($quantia)
    {
        if($quantia > 0)
        {
            $this->saldo += $quantia;
        }
    }
    function obterSaldo()
    {
        return $this->saldo;
    }

}

?>