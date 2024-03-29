<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Autenticavel;

//titular é uma pessoa
class Titular extends Pessoa implements Autenticavel // extends : clona uma classe já existente podendo realizar alterações
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf); // utiliza o construtor da classe Pai, ou seja, a classe Pessoa
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha === 'abcd';
    }
}
