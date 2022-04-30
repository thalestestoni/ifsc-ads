<?php
    include_once '../services/LivroServico.php';

    $livroServico = new LivroServico();

    $dadosLivros = $livroServico->obterLivros();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Livros</title>
</head>
<body>
    <div class="vh-100 vw-100 p-5">
        <h1>Listagem de livros</h1>
        <table class="table table-hover">
            <thead>
                <th scope="col">Nome</th>
                <th scope="col">Autor</th>
                <th scope="col">Editora</th>
                <th scope="col">Detalhes</th>
            </thead>
            <tbody>
                <?php foreach ($dadosLivros as $livro): ?>
                    <tr>
                        <td><?php echo $livro->getTitulo(); ?></td>
                        <td>
                            <?php foreach($livro->getAutores() as $autor): ?>
                            <?php echo $autor->getNome() ?>
                            <?php endforeach ?>
                        </td>
                        <td>
                            <!-- href deve levar para pagina da editora -->
                            <a href="">
                                <?php echo $livro->getEditora()->getNome(); ?>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo "VisualizacaoDadosLivro.php?codigoLivro=" .$livro->getCodigo(); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>