<?php
    function imprimeMatriz($matriz) {
        for ($i = 0; $i < count($matriz); $i++) {
            echo "Nome: ", $matriz[$i]["Nome"], "<br>";
            echo "Telefone: ", $matriz[$i]["Telefone"], "<br>", "<br>";
        }
    }

    $matriz = [
        ["Nome" => "John", "Telefone" => "30332211"],
        ["Nome" => "Bob", "Telefone" => "20221212"],
        ["Nome" => "Clara", "Telefone" => "98223311"],
        ["Nome" => "Linda", "Telefone" => "44330293"],
        ["Nome" => "James", "Telefone" => "38343321"]
    ];

    imprimeMatriz($matriz);
?>