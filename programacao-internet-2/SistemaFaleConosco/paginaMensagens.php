<?php
include_once './services/ContatoServico.php';

$contatoServico = new ContatoServico();

$mensagens = $contatoServico->obterMensagens();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($mensagens as $mensagem) echo $mensagem; echo '<br>'; ?>
</body>
</html>