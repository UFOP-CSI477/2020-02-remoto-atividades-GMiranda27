var quantidadeCombustivel = 0;
var quantidadeKm = 0;
var media_desempenho = 0;
var aux=0;
let listaVeiculos = [];

function consumoVeiculo(combustivel, km, desempenho){
    this.combustivel = combustivel;
    this.km = km;
    this.desempenho = desempenho;
}

function inserir(){
    
    const combustivel = document.getElementById('combustivel');
    const km = document.getElementById('km');
    const desempenho = km.value/combustivel.value;
        
    var linha = document.createElement('tr');
    linha.insertCell(0).innerHTML = combustivel.value;
    linha.insertCell(1).innerHTML = km.value;
    linha.insertCell(2).innerHTML = parseFloat(desempenho.toFixed(2));
            
    quantidadeCombustivel = parseFloat(quantidadeCombustivel) + parseFloat(combustivel.value);
    quantidadeKm = parseFloat (quantidadeKm) + parseFloat(km.value);
    media_desempenho = parseFloat(media_desempenho) + parseFloat(desempenho.toFixed(2));
            
    aux++;
    const veiculo = new consumoVeiculo(combustivel, km, desempenho);
    listaVeiculos.push(veiculo);
            
    document.getElementById('tabelaInicial').appendChild(linha);
    document.getElementById('concluir').disabled = false;
    combustivel.value = "";
    km.value = "";
    desempenho.value = "";
}

function concluir(){
    let linha;
    linha = document.createElement('tr');
    linha.insertCell(0).innerHTML = quantidadeCombustivel;
    linha.insertCell(1).innerHTML = quantidadeKm;
    linha.insertCell(2).innerHTML = parseFloat(quantidadeCombustivel.toFixed(2))/listaVeiculos.length;
    linha.insertCell(3).innerHTML = parseFloat (quantidadeKm.toFixed(2))/listaVeiculos.length;
    linha.insertCell(4).innerHTML = parseFloat(media_desempenho.toFixed(2))/listaVeiculos.length;
    document.getElementById('tabelaFinal').appendChild(linha);
}