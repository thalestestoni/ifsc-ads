<?php
    function calculadora($operacao, $numero1, $numero2) {
        $valorCalulo;

        switch ($operacao) {
            case 'somar':
                $valorCalulo = $numero1 + $numero2;
                break;
            case 'subtrair':
                $valorCalulo = $numero1 - $numero2;
                break;
            case 'multiplicar':
                $valorCalulo = $numero1 * $numero2;
                break;
            case 'dividir':
                $valorCalulo = $numero1 / $numero2;
                break;
        }

        return $valorCalulo;
    }

    $valor1 = calculadora('somar', 2, 2);
    echo("Resultado soma 2+2: $valor1");

    echo "<br>";

    $valor2 = calculadora('subtrair', 5, 2);
    echo("Resultado subtração 5-2: $valor2");

    echo "<br>";

    $valor3 = calculadora('multiplicar', 1, 2);
    echo("Resultado multiplicação 1*2: $valor3");

    echo "<br>";

    $valor = calculadora('dividir', 6, 2);
    echo("Resultado divisião 6/2: $valor");

    echo "<br>";
?>