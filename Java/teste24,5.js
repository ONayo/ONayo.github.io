lista = []

function listar(){

    novoitem =  document.getElementById('adicionar').value

    lista.push(novoitem)

    document.getElementById('lista').innerHTML = '<li>'+lista.join('</li><li>')+'</li>'

}
