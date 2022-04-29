<?php
    include_once 'Livro.php';
    include_once 'Autor.php';
    include_once 'Editora.php';
    
    class Estante {
        private $listaLivros;

        function __construct()
        {
            $autores = array(
                new Autor("Davis", "davis@example.com", "https://davis.com"),
                new Autor("Michele E.", "michele@example.com", "https://michele.com")
            );

            $editora = new Editora("Alta Books", "789131851", "altabooks@example.com", "https//altabooks.com");

            $this->listaLivros = array(
                new Livro("Aprendendo PHP e MySQL", "811829121", 543, 2008, "2 ed.", $autores, $editora),
                new Livro("Aprendendo PHP e MySQL", "811829121", 543, 2008, "2 ed.", $autores, $editora),
                new Livro("Aprendendo PHP e MySQL", "811829121", 543, 2008, "2 ed.", $autores, $editora),
                new Livro("Aprendendo PHP e MySQL", "811829121", 543, 2008, "2 ed.", $autores, $editora)
            );
        }

        function adicionar($livro) {
            array_push($this->listaLivros, $livro);
        }

        function obterQuantidade() {
            return count($this->listaLivros);
        }

        function pegarLivro($posicao) {
            return $this->listaLivros[$posicao];
        }

        function obterListaLivros() {
            return $this->listaLivros;
        }
    }
?>