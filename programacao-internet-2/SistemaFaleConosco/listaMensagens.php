<?php

include_once './services/ContatoServico.php';

$contatoServico = new ContatoServico();

$mensagens = $contatoServico->obterMensagens();

echo json_encode($mensagens);