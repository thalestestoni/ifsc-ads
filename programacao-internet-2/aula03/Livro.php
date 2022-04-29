<?php
    class Livro {
        private $titulo;
        private $isbn;
        private $nPaginas;
        private $anoPublicacao;
        private $numEdicao;
        private $autores;
        private $editora;

        function __construct($titulo, $isbn, $nPaginas, $anoPublicacao, $numEdicao, $autores, $editora)
        {
            $this->titulo = $titulo;
            $this->isbn = $isbn;
            $this->nPaginas = $nPaginas;
            $this->anoPublicacao = $anoPublicacao;
            $this->numEdicao = $numEdicao;
            $this->autores = $autores;
            $this->editora = $editora;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function getIsbn() {
            return $this->isbn;
        }

        function getNPaginas() {
            return $this->nPaginas;
        }

        function getAnoPublicacao() {
            return $this->anoPublicacao;
        }

        function getNumEdicao() {
            return $this->numEdicao;
        }

        function getAutores() {
            return $this->autores;;
        }

        function getEditora() {
            return $this->editora;
        }
    }
?>