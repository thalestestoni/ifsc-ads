<?php

include_once '../models/Editora.php';
include_once '../repositories/EditoraRepositorio.php';

class EditoraServico {
    private $repository;

    function __construct()
    {
        $this->repository = new EditoraRepositorio();
    }

    function obterEditora($codigoEditora)
    {
        $editora = $this->repository->obterEditora($codigoEditora);

        return new Editora(
            $editora['nome'],
            $editora['telefone'],
            $editora['email'],
            $editora['WEBSITE']
        );
    }
}