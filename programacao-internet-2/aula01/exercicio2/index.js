function findCep(inputCep) {
    const cep = inputCep.value;

    if (!cep) {
        setAddressFormData({
            endereco: 'Endereco',
            estado: 'Estado',
            cidade: 'Cidade'
        });

        return;
    }
    
    const httpClient = http.client();

    httpClient.onreadystatechange = () => {
        if (httpClient.readyState == http.states.complete) {
            if (httpClient.status == 200) {
                let response = JSON.parse(httpClient.responseText);
                
                setAddressFormData({
                    endereco: response.logradouro,
                    estado: response.uf,
                    cidade: response.localidade
                });
            }
        }
    }

    httpClient.open('GET', `https://viacep.com.br/ws/${cep}/json/`);
    httpClient.send();
}

function setAddressFormData(data) {
    form.htmlElements.endereco.placeholder = data.endereco;
    form.htmlElements.estado.placeholder = data.estado;
    form.htmlElements.cidade.placeholder = data.cidade;
}

function clearForm() {
    Object.entries(form.htmlElements).forEach(([_, element]) => {
        element.value = '';
    });
}

function seila(opcao) {
    if (opcao == 'confirmar'){
        form.htmlElements.opcaoSelecionada.value = 'confirmar';
    } else {
        form.htmlElements.opcaoSelecionada.value = 'cancelar';
    }

    document.forms[0].submit();
}

var http = {
    client: () => {
        if (window.XMLHttpRequest) {
            return new XMLHttpRequest();
        } else if (window.ActiveXObject) {
           return new ActiveXObject("Microsoft.XMLHTTP");
        }
    },
    states: {
        complete: 4
    }
}

var form = {
    htmlElements: {
        nome: document.getElementById('nome'),
        email: document.getElementById('email'),
        genero: document.getElementById('genero'),
        curso: document.getElementById('curso'),
        cep: document.getElementById('cep'),
        endereco: document.getElementById('endereco'),
        estado: document.getElementById('estado'),
        cidade: document.getElementById('cidade'),
        opcaoSelecionada: document.getElementById('opcaoSelecionada')
    }
}