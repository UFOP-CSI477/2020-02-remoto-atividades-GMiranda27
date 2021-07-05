function preencherBancos(data){
    let banco = document.getElementById("banco");
    
    for (let index in data){
    const {name, code} = data[index];

    let option = document.createElement('option');
    option.value = `${name} - ${code}`;
    option.innerHTML = `${name} - ${code}`;

    banco.appendChild(option);
    }
}

function API_Banco(){
    fetch("https://brasilapi.com.br/api/banks/v1")
        .then(response => response.json())
        .then(data => preencherBancos(data))
        .catch(error => console.error(error))
}

function Transacao(data, banco, operacao, tipoPix, valor){
    this.data = data;
    this.banco = banco;
    this.operacao = operacao;
    this.tipoPix = tipoPix;
    this.valor = valor;
}

function tabela(){

    let lista = [];

    var data = document.getElementById('data');
    var banco = document.getElementById('banco');
    var operacao = document.getElementById('operacao');
    var tipoPix = document.getElementById('tipoPix');
    var valor = document.getElementById('valor');

    var linha = document.createElement('tr');
        linha.insertCell(0).innerHTML = data.value;
        linha.insertCell(1).innerHTML = banco.value;
        linha.insertCell(2).innerHTML = operacao.value;
        linha.insertCell(3).innerHTML = tipoPix.value;
        linha.insertCell(4).innerHTML = valor.value;
        
            const transacao= new Transacao(data.value, banco.value, operacao.value, tipoPix.value, valor.value);
            lista.push(transacao);
            
        document.getElementById('resultado').appendChild(linha);
        data.value = "";
        banco.value = "";
        operacao.value = "";
        tipoPix.value = "";
        valor.value = "";
}