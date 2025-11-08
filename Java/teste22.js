function contar(){

    inicio = Number(document.getElementById('inicio').value)
    final = Number(document.getElementById('final').value)
    passo = Number(document.getElementById('passo').value)

    document.getElementById('retorno').innerHTML = '' //isso é para quando executar uma nova vez, o antigo ser apagado.

    for(contagem=inicio; contagem<=final; contagem+=passo){
        document.getElementById('retorno').innerHTML += contagem+'<br>'
    }

   /*
    for(contagem=1; contagem<=10; contagem++){
        document.getElementById('retorno').innerHTML += contagem+'<br>'
    }

    ambos os códigos em verde são a mesma coisa, tire comentário de um e bote no outro para testar.

    document.getElementById('retorno').innerHTML += '1<br>'
    document.getElementById('retorno').innerHTML += '2<br>'
    document.getElementById('retorno').innerHTML += '3<br>'
    document.getElementById('retorno').innerHTML += '4<br>'
    document.getElementById('retorno').innerHTML += '5<br>'
    document.getElementById('retorno').innerHTML += '6<br>'
    document.getElementById('retorno').innerHTML += '7<br>'
    document.getElementById('retorno').innerHTML += '8<br>'
    document.getElementById('retorno').innerHTML += '9<br>'
    document.getElementById('retorno').innerHTML += '10<br>' */
    
}