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