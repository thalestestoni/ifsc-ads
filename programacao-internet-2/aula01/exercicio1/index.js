const mathOption = Object.freeze({
    soma: 0,
    subtracao: 1,
    divisao: 2,
    multiplicacao: 3
});

function submitForm(event) {
    event.preventDefault();

    let value1 = document.getElementById('value1').value.trim();
    let value2 = document.getElementById('value2').value.trim();
    
    let resultDiv = document.getElementById('result');
    let selectedMathOption = document.getElementById('mathOperationSelect').selectedIndex;

    if (!value1 || !value2) {
        resultDiv.innerText = "Informe todos os valores para realizar o cálculo";
        return
    }

    if (selectedMathOption === mathOption.divisao && value2 === '0') {
        resultDiv.innerText = "Não é permitido divisão por 0.";
        return;
    }

    if (value1 === '0' || value2 === '0') {
        resultDiv.innerText = "Informe valores diferentes de 0 para realizar o cálculo";
        return;
    }

    document.getElementById('operation-math-form').submit();
}