<?php

class Pessoa
{
    public $id;
    public $nome;
    public $altura;
    public $idade;
    public $nascimento;
    public $escolaridade;
    public $salario;

    function __construct($id, $nome, $altura, $idade, $nascimento, $escolaridade, $salario)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->nascimento = $nascimento;
        $this->escolaridade = $escolaridade;
        $this->salario = $salario;
    }

    function __destruct()
    {
        echo "Objeto {$this->nome} finalizado...\n";
    }
    function crescer($centimetros)
    {
        if ($centimetros > 0)
        {
            $this->altura += $centimetros;
        }
    }

    function formar($titulacao)
    {
        $this->escolaridade = $titulacao;
    }
    function envelhecer($anos)
    {
        if($anos > 0)
        {
            $this->idade += $anos;
        }
    }
}



?>