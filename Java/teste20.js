/* function mudarCoisas(){

    largura = Number(document.getElementById('largura').value)

   // tamanho = Number(document.getElementById('tamanho').value)

    document.getElementById('caixa').style.width = largura+'px'

   // document.getElementById('caixa').style.height = tamanho+'px'        mas precisa de outro function e button para tamanho

}

function mudarCor(){

    cor = document.getElementById('cor').value
    document.getElementById('caixa').style.backgroundColor = cor

} */

function mudarCaixa(){

    caixa = document.getElementById('caixa')

// Esses comentários são só para separação de cada item.
    cor = document.getElementById('cor').value
    caixa.style.backgroundColor = cor

//
    caixa.style.width = largura+'px'
    largura = Number(document.getElementById('largura').value)

//
    caixa.style.height = altura+'px'
    altura = Number(document.getElementById('altura').value)

//
    caixa.innerText = texto
    texto = document.getElementById('texto').value

//
    borderadius = Number(document.getElementById('borderadius').value)
    caixa.style.borderRadius = borderadius+'%'

//

    grosso = Number(document.getElementById('grosso').value)
    tipo = document.getElementById('tipo').value
    cor2 = document.getElementById('cor2').value
    caixa.style.border = grosso+'px '+tipo+''+cor2

}