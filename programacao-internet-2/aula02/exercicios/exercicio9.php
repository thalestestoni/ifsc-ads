<?php
    function imprimirDadosPessoa($dadosPessoa) {
        echo "Nome: ", $dadosPessoa["nome"], "<br>";
        echo "Idade: ", $dadosPessoa["idade"], "<br>";
        echo "Gaspar: ", $dadosPessoa["cidade"], "<br>", "<br>";
    }

    function listaDadosPessoasAcima50Anos($matrizPessoas) {
        echo "<h2>Pessoas acima de 50 anos</h2>";

        foreach ($matrizPessoas as $dadosPessoa) {
            if ($dadosPessoa["idade"] > 50) {
               imprimirDadosPessoa($dadosPessoa);
            }
        }
    }

    function listaDadosPessoasGaspar($matrizPessoas) {
        echo "<h2>Pessoas de Gaspar</h2>";

        foreach ($matrizPessoas as $dadosPessoa) {
            if ($dadosPessoa["cidade"] == "Gaspar") {
                imprimirDadosPessoa($dadosPessoa);
            }
        }
    }

    function listaDadosPessoasComInicialABC($matrizPessoas) {
        echo "<h2>Pessoas de com a inicial A, B ou C nome</h2>";

        foreach ($matrizPessoas as $dadosPessoa) {
            if ($dadosPessoa["nome"][0] == "A" 
                || $dadosPessoa["nome"][0] == "B" 
                || $dadosPessoa["nome"][0] == "C"
            ) {
                imprimirDadosPessoa($dadosPessoa);
            }
        }
    }

    function listaDadosPessoasGasparMaior60Anos($matrizPessoas) {
        echo "<h2>Pessoas de Gaspar maiores de 60 anos</h2>";

        foreach ($matrizPessoas as $dadosPessoa) {
            if ($dadosPessoa["cidade"] == "Gaspar" && $dadosPessoa["idade"] > 60) {
                imprimirDadosPessoa($dadosPessoa);
            }
        }
    }

    $dadosPessoas = [
        ["nr" => 1, "nome" => "Bob", "idade" => 15, "cidade" => "Gaspar"],
        ["nr" => 2, "nome" => "Dylan", "idade" => 20, "cidade" => "Blumenau"],
        ["nr" => 3, "nome" => "Jardel", "idade" => 22, "cidade" => "Blumenau"],
        ["nr" => 4, "nome" => "Chris", "idade" => 50, "cidade" => "Idaial"],
        ["nr" => 5, "nome" => "Anna", "idade" => 8, "cidade" => "Gaspar"],
        ["nr" => 6, "nome" => "James", "idade" => 65, "cidade" => "Gaspar"],
        ["nr" => 7, "nome" => "Mary", "idade" => 81, "cidade" => "Idaial"],
        ["nr" => 8, "nome" => "John", "idade" => 36, "cidade" => "Brusque"],
        ["nr" => 9, "nome" => "Robert", "idade" => 2, "cidade" => "Brusque"],
        ["nr" => 10, "nome" => "Maria", "idade" => 5, "cidade" => "Itajaí"],
    ];

    listaDadosPessoasAcima50Anos($dadosPessoas);
    listaDadosPessoasGaspar($dadosPessoas);
    listaDadosPessoasComInicialABC($dadosPessoas);
    listaDadosPessoasGasparMaior60Anos($dadosPessoas);
?>