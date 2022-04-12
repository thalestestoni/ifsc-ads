<?php
    $result = "";

    if (!empty($_POST)) {
        $value1 = (int)$_POST['value1'];
        $value2 = (int)$_POST['value2'];
        $mathOperation = $_POST['mathOperation'];

        switch($mathOperation) {
            case 'soma':
                $result = $value1 + $value2;
                break;
            case 'subtracao':
                $result = $value1 - $value2;
                break;
            case 'divisao':
                $result = $value1 / $value2;
                break;
            case 'multiplicacao':
                $result = $value1 * $value2;
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div id="container">
            <h1>Operações matemáticas</h1>
            <form action="index.php" method="post" id="operation-math-form">
                <div id="values-container">
                    <input type="number" name="value1" id="value1" placeholder="Valor 1">
                    <input type="number" name="value2" id="value2" placeholder="Valor 2">
                </div>
                <select name="mathOperation" id="mathOperationSelect">
                    <option value="soma">Soma</option>
                    <option value="subtracao">Subtração</option>
                    <option value="divisao">Divisão</option>
                    <option value="multiplicacao">Multiplicação</option>
                </select>
                <button onClick="submitForm(event)">Calcular</button>
                <div id="result">
                    <?php
                        if (!empty($result)) {
                            echo "O resultado é $result";
                        }
                    ?>
                </div>
            </form>
        </div>
    </main>
</body>
<script type="text/javascript" src="index.js"></script>
</html>