<?php
    function imprimirDados($nome, $idade) {
        echo("$nome, $idade anos.");

        if ($idade < 18) {
            echo "<br>";
            echo "Você é menor de idade.";
        } else {
            echo "Você já é maior de idade.";
        }
    }

    imprimirDados("Thales", 25);
?>