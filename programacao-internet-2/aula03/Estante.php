<?php
    include_once 'Livro.php';
    class Estante {
        private $listaLivros;

        function __construct()
        {
            $this->listaLivros = array();
            $this->listaLivros[] = new Livro("Aprendendo PHP e MySQL", "811829121", 543, 2008, "2 ed.");
            $this->listaLivros[] = new Livro("Aprendendo PHP e MySQL", "811829121", 543, 2008, "2 ed.");
            $this->listaLivros[] = new Livro("Aprendendo PHP e MySQL", "811829121", 543, 2008, "2 ed.");
            $this->listaLivros[] = new Livro("Aprendendo PHP e MySQL", "811829121", 543, 2008, "2 ed.");
        }

        function adicionar($livro) {

            // TODO: return void
        }

        function obterQuantidade() {
            // TODO: return int
        }

        function pegarLivro($posicao) {
            // TODO: return livro
        }

        function obterListaLivros() {
            return $this->listaLivros;
        }
    }
?>