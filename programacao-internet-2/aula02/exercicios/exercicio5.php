<?php
    function imprimirTabuada($numero) {
        for($i = 0; $i < 11; $i++) {
            $resultado = $numero * $i;
            echo "$numero * $i = $resultado";
            echo "<br>";
        }
    }

    imprimirTabuada(2);
?>