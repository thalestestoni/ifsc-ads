<?php
    class Livro {
        private $titulo;
        private $isbn;
        private $nPaginas;
        private $anoPublicacao;
        private $numEdicao;
        private $autor;
        private $editora;

        function __construct($titulo, $isbn, $nPaginas, $anoPublicacao, $numEdicao)
        {
            $this->titulo = $titulo;
            $this->isbn = $isbn;
            $this->nPaginas = $nPaginas;
            $this->anoPublicacao = $anoPublicacao;
            $this->numEdicao = $numEdicao;
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

        function getAutor() {
            //TODO
        }

        function getEditora() {
            //TODO
        }
    }
?>