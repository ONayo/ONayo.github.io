function texto(){
    
    nome = document.getElementById('nome').value
    cidade = document.getElementById('localizacao').value
    idade = Number(document.getElementById('idade').value)
    genero = document.getElementById('genero').value
    n1 = Number(document.getElementById('n1').value)
    n2 = Number(document.getElementById('n2').value)
    
    document.getElementById('texto1').innerHTML =  'Informações de usuário: ' +
    '<br> Nome: ' +nome+
    '<br> Idade: ' +idade+
    '<br> Localização: ' +cidade+
    '<br> Gênero: ' +genero

    document.getElementById('respostasoma').innerHTML = n1+n2
    /* pode fazer:
    texto = document.getElementById('texto1')
    texto.innerHTML =  'Bom Dia Gnomo'
    */

    


}
// inner = insira
function somar(){
    n1 = Number(document.getElementById('n1').value)
    n2 = Number(document.getElementById('n2').value)
    soma = (n1/n2)*100
    document.getElementById('resultado').innerHTML = '<b>'+soma+'% </b>'
}