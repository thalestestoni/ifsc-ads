<?php
include_once '../models/Autor.php';
include_once '../repositories/LivroAutorRepositorio.php';

class LivroAutorServico {
    private $repository;

    function __construct() {
        $this->repository = new LivroAutorRepositorio();
    }

    function obterAutores($codigoLivro) {
        $listaAutores = $this->repository->obterAutores($codigoLivro);

        $autores = array();

        foreach ($listaAutores as $autor) {
            array_push($autores, new Autor(
                $autor['nome'],
                $autor['email'],
                $autor['website']
            ));
        }

        return $autores;
    }
}