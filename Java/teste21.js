function pontos(){

    qtd_goblin = Number(document.getElementById('goblin').value)
    qtd_esqueleto = Number(document.getElementById('esqueleto').value)
    qtd_orc = Number(document.getElementById('orc').value)
    qtd_boss = Number(document.getElementById('boss').value)

    pts_goblin = qtd_goblin*0.7
    pts_esqueleto = qtd_esqueleto*1.5
    pts_orc = qtd_orc*3.2
    pts_boss = qtd_boss*6
    pts = pts_boss + pts_orc + pts_esqueleto + pts_goblin //forma 1 de calcular, as vezes é melhor para poder calcular um de cada

    // forma 2 é a próxima:
    // ptstotal = (qtdGoblin*1) + (qtdEsqueleto*2) + (qtdOrc*3) + (qtdBoss*5)

    document.getElementById('relatorio').innerHTML = "Sua pontuação foi definida como: <b>"+ pts +"</b>"

    if(pts > 1000){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + '神 (Deus)</b>'
    }else if(pts > 1000){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'Tier 1</b>. Força continental.'
    }else if(pts > 500){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'Tier 2</b>. Força nacional.'
    }else if(pts > 250){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'Tier 3</b>. Força regional.'
    }else if(pts > 90){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'SSS</b>. Parabéns! Você é quase o topo do topo!'
    }else if(pts > 83){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'SS</b>. Você já é uma grande força.'
    }else if(pts > 75){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'S</b>. Bem vindo a elite.'
    }else if(pts > 69){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'A+</b>. Você está próximo da elite.'
    }else if(pts > 58){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'A</b>. Bom trabalho, continue assim.'
    }else if(pts > 47){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'B</b>. A média.'
    }else if(pts > 36){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'C</b>. Você tem alguma útilidade.'
    }else if(pts > 25){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'D</b>. Você não é inútil.'
    }else if(pts > 14){
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'E</b>. Talvez esse não seja o caminho certo para você.'
    }else{
        document.getElementById('classtua').innerHTML = '<b>Sua classificação foi determinada como: ' + 'F</b>. Dessista de caçar monstros, você é totalmente dispençável.'
    }

}