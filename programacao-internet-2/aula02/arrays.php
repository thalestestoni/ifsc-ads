<?php
    echo "Lista 1";
    echo "<br>";

    $lista1 = array(
        "key1" => "value1",
        "key2" => "value2"
    );

    var_dump($lista1);

    echo "<br>";
    echo "<br>";

    echo "Lista 2";
    echo "<br>";

    // short sintax
    $lista2 = [
        "key1" => "value1",
        // The key can either be an int or a string. The value can be of any type.
        2 => "value2"
    ];

    var_dump($lista2);

    echo "<br>";
    echo "<br>";

    echo "Lista 3";
    echo "<br>";

    // assim irá produzir um array com acesso aos elemtos através do indice numérico
    $lista3 = array(
        "SC",
        "PR",
        "RS"
    );

    var_dump($lista3);

    echo "<br>";
    echo "<br>";

    echo "Lista 4";
    echo "<br>";

    $lista4 = array();
    $lista4[] = "SC";
    $lista4[] = "PR";
    $lista4[] = "RS";

    var_dump($lista4);

    echo "<br>";
    echo "<br>";

    echo "Lista 5";
    echo "<br>";

    $lista5 = [];
    $lista5[3] = "SC";
    $lista5[1] = "PR";
    $lista5[2] = "RS";

    var_dump($lista5);

    echo "<br>";
    echo "<br>";

    echo "Lista 6";
    echo "<br>";

    $lista6 = [];
    $lista6["SC"] = "Santa Catarina";
    $lista6["PR"] = "Paraná";
    $lista6["RS"] = "Rio Grande do Sul";

    var_dump($lista6);

    echo "<br>";
    echo "<br>";

    // Matriz

    echo "Matriz";
    echo "<br>";

    $matriz = [
        ["nome" => "bob", "idade" => 20],
        ["nome" => "james", "idade" => 25]
    ];

    var_dump($matriz);

    echo "<br>";
    echo "<br>";

    // Percorrendo um array
    echo "Percorrendo array";
    echo "<br>";
    foreach($lista1 as $valor){
        echo($valor);
        echo " ";
    }

    echo "<br>";

    foreach($lista1 as $chave=>$valor){
        echo("$chave - $valor");
        echo " ";
    }
?>  