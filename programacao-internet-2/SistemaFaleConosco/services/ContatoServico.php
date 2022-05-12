<?php

include_once './repositories/ContatoRepositorio.php';

class ContatoServico {
    private $repositorio;

    function __construct()
    {
        $this->repositorio = new ContatoRepositorio();
    }

    function gravar($contato){
        echo $contato;
        return;
        $this->repositorio->gravar($contato);
    }

    function obterMensagens() {
        return $this->repositorio->obterMensagens();
    }
}