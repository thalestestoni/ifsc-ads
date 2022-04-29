<?php
    class Editora {
        private $nome;
        private $telefone;
        private $email;
        private $website;

        function __construct($nome, $telefone, $email, $website)
        {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->website = $website;
        }

        function getNome() {
            return $this->nome;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function getEmail() {
            return $this->email;
        }

        function getWebSite() {
            return $this->website;
        }
    }
?>