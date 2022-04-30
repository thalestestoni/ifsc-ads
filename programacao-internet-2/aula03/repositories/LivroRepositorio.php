<?php
include_once '../database/DbConnection.php';

class LivroRepositorio {
    private $dbInstance;

    function __construct()
    {
        $dbConnection = new DbConnection();
        $this->dbInstance = $dbConnection->getInstance();
    }

    function obterLivros()
    {
        $sqlQuery = "select * from livro";

        return $this->dbInstance->query($sqlQuery);
    }

    function obterDadosLivro($codigoLivro) {
        $stmt = $this->dbInstance->prepare('select * from livro where codigo = ?');

        $stmt->execute([$codigoLivro]);

        return $stmt->fetch();
    }
}