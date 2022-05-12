<?php

class Contato {
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
    private $mensagem;

    function __construct($nome, $sobrenome, $email, $telefone, $mensagem)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->mensagem = $mensagem;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getMensagem() {
        return $this->mensagem;
    }
}