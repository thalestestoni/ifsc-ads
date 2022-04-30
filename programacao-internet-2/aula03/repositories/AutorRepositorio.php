<?php
include_once '../database/DbConnection.php';

class AutorRepositorio {
    private $dbInstance;

    function __construct()
    {
        $dbConnection = new DbConnection();
        $this->dbInstance = $dbConnection->getInstance();
    }

    function obterAutor($codigoAutor)
    {
        $stmt = $this->dbInstance->prepare('select * from autor where codigo = ?');

        $stmt->execute([$codigoAutor]);

        return $stmt->fetch();
    }        
}