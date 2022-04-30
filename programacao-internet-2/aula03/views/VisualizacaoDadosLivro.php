<?php
    include_once '../services/LivroServico.php';

    $codigoLivro = $_GET['codigoLivro'];
    
    $livroServico = new LivroServico();
    
    $livro = $livroServico->obterDadosLivro($codigoLivro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Dados Livro</title>
</head>
<body>
    <div class="vh-100 vw-100 p-5">
        <h1>Dados do livro</h1>
        <table class="table table-hover w-50">
            <tbody>
                <tr>
                    <td>ISBN:</td>
                    <td><?php echo $livro->getIsbn(); ?></td>
                </tr>
                <tr>
                    <td>Título:</td>
                    <td><?php echo $livro->getTitulo(); ?></td>
                </tr>
                <tr>
                    <td>Num. páginas:</td>
                    <td><?php echo $livro->getNPaginas() ?></td>
                </tr>
                <tr>
                    <td>Edição:</td>
                    <td><?php echo $livro->getNumEdicao(); ?></td>
                </tr>
                <tr>
                    <td>Editora:</td>
                    <td><?php echo $livro->getEditora()->getNome(); ?></td>
                </tr>
                <tr>
                    <td>Autor:</td>
                    <td>
                        <?php foreach($livro->getAutores() as $autor): ?>
                        <?php echo $autor->getNome() ?>
                        <?php endforeach ?>
                    </td>
                </tr>
                <tr>
                    <td>Ano:</td>
                    <td><?php echo $livro->getAnoPublicacao(); ?></td>
                </tr>
            </tbody>
        </table>
        <a href="ListagemLivros.php" class="btn btn-primary">Voltar</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>