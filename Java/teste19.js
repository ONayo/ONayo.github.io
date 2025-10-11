function senhab(){

    senha = document.getElementById('senha1').value

    if( senha == 'super123' ){
        document.getElementById('saida').innerHTML = '<p class="acerto"> Acesso Concedido </p>'
    }else{
        document.getElementById('saida').innerHTML = '<p class="erro"> Acesso Negado </p>'
    }

}