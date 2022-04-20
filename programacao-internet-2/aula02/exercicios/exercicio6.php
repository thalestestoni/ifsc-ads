<?php
    function imprimeVetorNumero($vetor) {
        $qtdNumerosNegativos = 0;
        $qtdNumerosPositivos = 0;
        $qtdNumerosPares = 0;
        $qtdNumerosImpares = 0;

        foreach ($vetor as $numero) {
            if ($numero % 2 == 0) {
                $qtdNumerosPares++;
            } else {
                $qtdNumerosImpares++;
            }

            if ($numero > 0) {
                $qtdNumerosPositivos++;
            } else {
                $qtdNumerosNegativos++;
            }
        }

        echo "Quantidade de número negativos: $qtdNumerosNegativos.";
        echo "<br>";
        echo "Quantidade de número positivos: $qtdNumerosPositivos.";
        echo "<br>";
        echo "Quantidade de número pares: $qtdNumerosPares.";
        echo "<br>";
        echo "Quantidade de número impares: $qtdNumerosImpares.";
        echo "<br>";
    }

    imprimeVetorNumero([2, 3, -1, -2]);
?>