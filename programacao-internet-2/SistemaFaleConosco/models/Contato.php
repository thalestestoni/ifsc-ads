<?php

class Contato {
    private $nome;
    private $email;
    private $telefone;
    private $mensagem;

    function __construct($nome, $email, $telefone, $mensagem)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->mensagem = $mensagem;
    }

    function getNome() {
        return $this->nome;
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