function mudarCoisas(){

    largura = Number(document.getElementById('largura').value)

   // tamanho = Number(document.getElementById('tamanho').value)

    document.getElementById('caixa').style.width = largura+'px'

   // document.getElementById('caixa').style.height = tamanho+'px'        mas precisa de outro function e button para tamanho

}

function mudarCor(){

    cor = document.getElementById('cor').value

    document.getElementById('caixa').style.backgroundColor = cor

}