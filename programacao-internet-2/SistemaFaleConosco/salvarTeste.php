<?php

include_once './services/ContatoServico.php';
include_once './models/Contato.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$contato = new Contato($nome, $email, $telefone, $mensagem);

$contatoServico = new ContatoServico();

$contatoServico->gravar($contato);

 // Processar/Gravar dados
 
$retorno = array();
$retorno['result'] = true;
$retorno['msg'] = "Mensagem recebida de ".$nome;

echo json_encode($retorno);