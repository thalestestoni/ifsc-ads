<?php
include_once '../database/DbConnection.php';

class LivroAutorRepositorio {
    private $dbInstance;

    function __construct()
    {
        $dbConnection = new DbConnection();
        $this->dbInstance = $dbConnection->getInstance();
    }

    function obterAutores($codigoLivro) {
        $stmt = $this->dbInstance->prepare('
            select t2.* 
            from livro_autor t1
            join autor t2 on t1.cod_autor = t2.codigo
            where t1.codi_livro = ?
        ');

        $stmt->execute([$codigoLivro]);

        return $stmt->fetchAll();
    }
}