function salvarTexto(){
    // Pegar texto da entrada
    texto = document.getElementById('texto').value
    // Salvar o texto escrito na memória do navegator
    localStorage.setItem('texto',texto)
    // Escrever no "p"
    document.getElementById('texto').innerText
}

function resgatarTexto(){
    // Pega o texto salvo da memória do navegator
    texto = localStorage.getItem('texto')
    if(texto){
        document.getElementById('saida').innerText = texto //verifica se existe algum texto salvo
    }
}
// Carregar o texto salvo
window.onload = resgatarTexto