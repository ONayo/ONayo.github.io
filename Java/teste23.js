/* temos diversos comandos de java script para serem usados no console, temos o "???.length" usado para saber quantos caracteres tem em uma string.

temos o ???.charAt(algum número) e ???[algum número] que vai mostrar o caracter do número escolhido ali, porém isso sempre começará em 0.

(??? é uma váriavel) dá para escrever "???.charAt(???.length-1)" que vai mostrar o último caracter da string (se escrever -2, vai mostrar o penúltimo e assim vai indo).

existe o ???.slice(primeiro número,segundo número) fazendo isso mostrar um trecho do texto, mas se não bodar nada no segundo, vai ir da primeira letra até a última.

o "???.toUpperCase()" e "???.toLowerCase()" vão mudar a "formatação" do texto APENAS MOSTRANDO como ele seria para respectivamente maiusculo e minusculo, 
mas se escrever "??? = ???.toUpperCase()" irá transformar a váriavel em maiusculo de verdadde, não apenas mostrando como seria.

você pode transformar em maiusculo/minusculo apenas uma parte da sua váriavel escrevendo: "??? = ???.charAt(0).toUpperCase() + ???.slice(1,). toLowerCase()" esse em especifico
transforma apenas a primeira letra em maiusculo. 

tem o "indexOf("alguma letra)" que vai mostrar qual é a "ordem" de alguma letra, mas quando você pesquisar alguma letra que não existe na váriavel, ele vai falar que é -1.

se escrever "texto.split(s)" e o texto (váriavel) for "texto = eu vou comer isso na cidade", ele vai retornar o texto como: "eu vou comer i, o na cidade", dá para fazer
isso com o espaço também. fazendo "texto.split(' ').length", vai mostrar quantos caracteres foram recortados, dá para fazer também "novavariavel = texto.split(' ')" fazendo
uma nova váriavel que é a váriavel texto porém sem os espaços.

se tivermos uma váriavel como nome = ' meu ', escrevendo nome.trim(), você irá retirar os espaços no final de no começo, mesmo se a váriavel for nome = ' meu e seu ', com o trim,
a váriavel ficará: "meu e seu".

se a sua váriavel foi tipo: "mensagem = 'foi o rodrigo que falou'", porém foi o roberto que falou, você pode escrever: "mensagem.replace('rodrigo,'roberto')", virando:
"mensagem = 'foi o roberto que falou'", dá para substituir até mesmo por "nome.trim()" ou "texto.toLowerCase()" ou qual quer coisa do tipo.

numa váriavel como: "msg = 'minha camisa é verde porque eu gosto da cor verde'", você não pode escrever msg.replace('verde','azul'), pois apenas o primeiro "verde" será trocado, então
você deve escrever "msg.replaceAll('verde','azul')".

quando for escrever "???.indexOf('alguma letra'), você só saberá a localização da primeira letra da que tu escolheu, para saber todas, escreva ???.match(/letra1/g), para duas ou mais letras:
???.match(/[ahdf]/g), aparecendo todas as escritas dentro do [], mas isso não conta com maiusculo e minulculo, teria que escrever "AHDF" também, mas escrevendo "gi" ao invés de
apenas "g", vai mostrar ambas maiusculas e minusculas. */