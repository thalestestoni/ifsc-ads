<?php

include_once './database/DbConnection.php';

class ContatoRepositorio {
    private $dbInstance;

    function __construct()
    {
        $dbConnection = new DbConnection();
        $this->dbInstance = $dbConnection->getInstance();
    }

    function gravar($contatoDto) {
        try {
            $stmt = $this->dbInstance->prepare('insert into contato (nome, email, telefone, mensagem) values (?,?,?,?)');
        
            $stmt->execute([$contatoDto->nome, $contatoDto->email, $contatoDto->telefone, $contatoDto->mensagem]);

            return $stmt->fetch(); // fetch?
        }
        catch (Exception $exception) {

        }
    }

    function obterMensagens() {
        $stmt = $this->dbInstance->prepare('select mensagem from contato');
        
        return $stmt->fetchAll();
    }
}