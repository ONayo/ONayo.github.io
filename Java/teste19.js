function mostrar(){

    item = Number(document.getElementById('itemostrar').value)

    if( item > 3 ){
        alert('Correto')
    }else if( item < 3 ){
        alert('Errado')
    }else{
        alert('Tu dá muito é teu ...')
    }


}