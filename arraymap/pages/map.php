<?php

$frutas = ["banana", "maçã", "laranja"];
$frutaEscolhida = $_GET['frutas'] ?? null;

$frutasDestacadas = array_map(function($valor) use ($frutaEscolhida) {
    return $valor === $frutaEscolhida ? "$valor (escolhida)" : $valor;
}, $frutas);

print_r($frutasDestacadas);



//array_map() → percorre o array $frutas e aplica a função em cada elemento, retornando um novo array.

//function($valor) use ($frutaEscolhida) → função anônima que recebe cada valor do array como $valor.

//use ($frutaEscolhida) → permite que a função acesse a variável $frutaEscolhida que está fora dela.

//$valor === $frutaEscolhida ? "$valor (escolhida)" : $valor; → operador ternário:

//Se $valor for igual à fruta escolhida, retorna "$valor (escolhida)".

//Se não, retorna o valor normal $valor.

//$frutasDestacadas → guarda o novo array com a fruta escolhida marcada.

//print_r($frutasDestacadas); → imprime o array completo de forma legível.


















?>