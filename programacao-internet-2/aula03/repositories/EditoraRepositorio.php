<?php
include_once '../database/DbConnection.php';

class EditoraRepositorio {
    private $dbInstance;

    function __construct()
    {
        $dbConnection = new DbConnection();
        $this->dbInstance = $dbConnection->getInstance();
    }

    function obterEditora($codigoEditora)
    {
        $stmt = $this->dbInstance->prepare('select * from editora where codigo = ?');

        $stmt->execute([$codigoEditora]);

        return $stmt->fetch();
    }        
}