var quantParticipantes = 0;
let listaParticipantes = [];

function verificaInserir(valor){
    valor.classList.remove('invalid');
    if (valor.value.length > 0){
        return true;
    } else{
        valor.classList.add('invalid');
    }
}

function Participante(nomeJogador, tempoJogador, largada){
    this.nomeJogador = nomeJogador;
    this.tempoJogador = tempoJogador;
    this.largada = largada;
}

function inserir(){

    var nomeJogador = document.getElementById('nomeJogador');
    var tempoJogador = document.getElementById('tempoJogador');
    if (quantParticipantes<= 6){
        if (verificaInserir(nomeJogador) && verificaInserir(tempoJogador)){
            quantParticipantes += 1;
            var linha = document.createElement('tr');
                linha.insertCell(0).innerHTML = quantParticipantes;
                linha.insertCell(1).innerHTML = nomeJogador.value;
                linha.insertCell(2).innerHTML = parseInt(tempoJogador.value);
            const participante = new Participante(nomeJogador.value, tempoJogador.value, quantParticipantes);
                listaParticipantes.push(participante);
            
            document.getElementById('tabelaInicial').appendChild(linha);
            document.getElementById('resultado').disabled = false;
            nomeJogador.value = "";
            tempoJogador.value = "";
        }
    }

    if (parseInt(quantParticipantes) === 6){
        document.getElementById('inserirCompetidor').disabled = true;
        tempoJogador.disabled = true;
        nomeJogador.disabled = true;
    }
}

function resultado(){
    document.getElementById('resultado').disabled = true;
    var tempoJogadorInicial;
    let linha;
    
    if (listaParticipantes.length > 0) {
        document.getElementById('inserirCompetidor').disabled = true;
        tempoJogador.disabled = true;
        nomeJogador.disabled = true;

        listaParticipantes.sort(
            function (a, b) {
                if (a.tempoJogador < b.tempoJogador) {
                    return -1;
                } else if (a.tempoJogador > b.tempoJogador) {
                    return 1;
                } else {
                    return 0;
                }
            }
        );

        for (var i=0; i<listaParticipantes.length; i++){
            tempoJogador = listaParticipantes[0].tempoJogador;
            linha = document.createElement('tr');

                
                linha.insertCell(0).innerHTML = i + 1;
                linha.insertCell(1).innerHTML = listaParticipantes[i].largada;
                linha.insertCell(2).innerHTML = listaParticipantes[i].nomeJogador;
                linha.insertCell(3).innerHTML = listaParticipantes[i].tempoJogador;
            
                if (listaParticipantes[i].tempoJogador === tempoJogador){
                linha.insertCell(4).innerHTML = "Vencedor!";
            } else{
                linha.insertCell(4).innerHTML = "";
            }
            
            document.getElementById('tabelaFinal').appendChild(linha);
            document.getElementById('novaApuracao').disabled = false;
        }
    }
}

function recarrega(){
    location.reload();
}