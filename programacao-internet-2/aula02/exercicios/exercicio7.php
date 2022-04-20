<?php
    function multiplicacaoMatriz($matriz) {
        $novoVetor = [];

        for ($i = 0; $i < count($matriz); $i++) {
            for ($j = 0; $j < count($matriz[$i]); $j++) {
                $novoVetor[] = $matriz[$i][$j] * $matriz[$i][$j];
            }
        }

        $matriz[] = $novoVetor;

        for ($i = 0; $i < count($matriz); $i++) {
            for ($j = 0; $j < count($matriz[$i]); $j++) {
                echo $matriz[$i][$j];
                echo ", ";
            }
            echo "<br>";
        }
    }

    multiplicacaoMatriz([
        [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
        [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    ]);
?>