<form method="GET">
    <input type="text" name="pokemon" placeholder="Nome do Pokémon">
    <button type="submit">Pesquisar</button>
</form>

<?php

if (isset($_GET['pokemon'])) {
    $nome = strtolower($_GET['pokemon']);
    $url = "https://pokeapi.co/api/v2/pokemon/" . $nome;
    $resposta = file_get_contents($url);
    $pokemon = json_decode($resposta, true);
    echo "ID: " . $pokemon['id'] . "<br>";
    echo "Nome: " . $pokemon['name'] . "<br>";
    echo "Tipos: ";
    foreach ($pokemon['types'] as $tipo) {
        echo $tipo['type']['name'] . " ";
    }
    echo "<br>";
    echo "<img src='" . $pokemon['sprites']['front_default'] . "'>";
}
?>