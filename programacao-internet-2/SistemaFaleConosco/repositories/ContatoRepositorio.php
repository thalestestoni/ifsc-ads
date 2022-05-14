<?php

include_once './database/DbConnection.php';

class ContatoRepositorio {
    private $dbInstance;

    function __construct()
    {
        $dbConnection = new DbConnection();
        $this->dbInstance = $dbConnection->getInstance();
    }

    function gravar($contato) {
        try {
            $stmt = $this->dbInstance->prepare('insert into contato (nome, email, telefone, mensagem) values (?,?,?,?)');
        
            $stmt->execute([$contato->getNome(), $contato->getEmail(), $contato->getTelefone(), $contato->getMensagem()]);

            return $stmt->fetch();
        }
        catch (Exception $exception) {
            echo("Falha ao tenta gravar a mensagem");
        }
    }

    function obterMensagens() {
        $dados = $this->dbInstance->query('select mensagem from contato');

        $mensagens = array();

        foreach ($dados as $row) {
            array_push($mensagens, $row['mensagem']);
        }

        return $mensagens;
    }
}   