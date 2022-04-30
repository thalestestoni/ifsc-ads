<?php
include_once '../repositories/LivroRepositorio.php';
include_once '../services/EditoraServico.php';
include_once '../services/LivroAutorServico.php';
include_once '../models/Livro.php';

class LivroServico {
    private $repository;
    private $editoraServico;
    private $livroAutorServico;

    function __construct() {
        $this->repository = new LivroRepositorio();
        $this->editoraServico = new EditoraServico();
        $this->livroAutorServico = new LivroAutorServico();
    }

    function obterLivros() {
        $listaLivros = $this->repository->obterLivros();

        $livros = array();

        foreach ($listaLivros as $livro)
        {
            $autores = $this->livroAutorServico->obterAutores($livro['codigo']);
            $editora = $this->editoraServico->obterEditora($livro['cod_editora']);
            
            array_push($livros, new Livro(
                $livro['codigo'],
                $livro['titulo'],
                $livro['isbn'],
                $livro['numpaginas'],
                $livro['anopublicacao'],
                $livro['numEdicao'],
                $autores,
                $editora
            ));
        }

        return $livros;
    }

    function obterDadosLivro($codigoLivro) {
        $livro = $this->repository->obterDadosLivro($codigoLivro);

        $autores = $this->livroAutorServico->obterAutores($livro['codigo']);
        $editora = $this->editoraServico->obterEditora($livro['cod_editora']);

        return new Livro(
            $livro['codigo'],
            $livro['titulo'],
            $livro['isbn'],
            $livro['numpaginas'],
            $livro['anopublicacao'],
            $livro['numEdicao'],
            $autores,
            $editora
        );
    }
}