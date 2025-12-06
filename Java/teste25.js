lista = JSON.parse(localStorage.getItem('lista')) || []
window.onload = carregarLista

function carregarLista(){
    // SAÍDA
    if(lista.length > 0){
        document.getElementById('lista').innerHTML = '<li>'+lista.join('</li><li>')+'</li>'
    }

}

function listar(){
    // ENTRADA
    item =  document.getElementById('adicionar').value
    item = item.trim()
    item = item[0].toUpperCase() + item.slice(1).toLowerCase()
    document.getElementById('adicionar').value = ''
    
    // VALIDAÇÃO
     /* || significa "ou" */
    if(item.length == 0 || item.length > 30 ){
        alert('O item precisa de pelo menos 1 caracter e no máximo 30')
    }else if( lista.includes(item) ){
        alert('Não se deve adicionar itens repetidos')
    }else{
        lista.push(item)
        localStorage.setItem('lista',JSON.stringify(lista))
        carregarLista()
    }

}

/* 

lista = []              declaração da lista

lista                   retorna a lista completa
lista[0]                retorna o item na posição informada
lista.length            retorna o tamanho da lista
lista[lista.length-1]   retorna o último item da lista
lista[0] = 'x'          altera o item na posição informada
lista.slice(1,3)        retorna um trecho da lista entre os índices informados
lista.join('/')         retorna a lista com os itens separados por "/"

lista.push('z')         adiciona um item no fim da lista
lista.unshift('a')      adiciona um item no início da lista
lista.splice(2,0,'f')   adiciona um item na posição informada

lista.pop()             remove um item no fim da lista
lista.shift()           remove um item no início da lista
lista.splice(2, 1)      remove um item na posição informada

lista.includes('p')     retorna a existência do item informado
lista.indexOf('r')      retorna o índice do item informado

lista.sort()            ordena a lista alfabeticamente
lista.reverse()         inverte a lista

*/