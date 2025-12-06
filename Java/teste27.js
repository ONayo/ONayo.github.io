window.onload = resgatarTexto  // Quando a página carrega, acontece aquele function ali.

// Quando a página carrega, eu pego a variável texto.
function resgatarTexto(){
    texto = localStorage.getItem('input') // PEGAR
    if(input){ // Quando eu coloco "if" com uma variável, vai retornar a informação como falso.
        document.getElementById('saida').innerText = texto
    }
}

// Quando eu clico no botão, eu altero a variável texto.
function salvarTexto(){
    texto = document.getElementById('input').value
    localStorage.setItem('input', texto) // GUARDAR
    document.getElementById('saida').innerText = texto
}

// localStorage.getItem('???y') localStorage.setItem('???x', '???y')