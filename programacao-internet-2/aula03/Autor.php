<?php
    class Autor {
        private $nome;
        private $email;
        private $website;

        function __construct($nome, $email, $website)
        {
            $this->nome = $nome;
            $this->email = $email;
            $this->website = $website;
        }

        function getNome() {
            return $this->nome;
        }

        function getEmail() {
            return $this->email;
        }

        function getWebSite() {
            return $this->website;
        }
    }
?>