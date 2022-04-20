<?php
    function calcularSalario($horasTrabalhadas, $valorHora, $desconto = 0) {
        $salario = $horasTrabalhadas * $valorHora - $desconto;

        echo "Salario: $salario";
    }

    calcularSalario(100, 20, 10);
?>