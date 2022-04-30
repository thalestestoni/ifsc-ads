<?php

include_once '../repositories/AutorRepositorio.php';

class AutorServico {
    private $repository;

    function __construct()
    {
        $this->repository = new AutorRepositorio();
    }

    function obterAutor($codigoAutor)
    {
        $autor = $this->repository->obterAutor($codigoAutor);

        return new Autor(
            $autor['nome'],
            $autor['email'],
            $autor['website']
        );
    }
}